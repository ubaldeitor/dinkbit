/*Created by AlexCD on 26.02.2014*/
/*global $, window, document*/
function CustomJsSlider() {
    "use strict";
    return {
        restrict: 'E',
        scope: {
            rangeInterval: '=rangeInterval',
            minRange: '=minRange',
            maxRange: '=maxRange',
            rangeIncrementFlag: '=rangeIncrementFlag'
        },
        template: '<div class="jsSliderHandlerTrack">'
            + '<div class="jsSliderHandlerFill">'
            + '<span class="jsSliderHandler">'
            + '<span class="handlerCenterPoint"></span>'
            + '</span>'
            + '</div>'
            + '</div>',
        link: function (scope, element, attr, ctrl) {
            //SLIDER SETUP
            //define directive variables
            var rangeInterval, minRange, maxRange,
                handler, handlerPointer, handlerWidth, handlerLeftPos,
                handlerTrack, handlerTrackWidth,
                handlerFill,
                startX,
                clickedHandlerByMouseFlag,
                rangeIncrementFlag;

            //get directive DOM elements
            handler = element.find('span')[0];
            handlerPointer = element.find('span')[1];
            handlerTrack = element.find('div')[0];
            handlerFill = element.find('div')[1];

            //positioning the handler vertically on the track
            handler.style.top = (handlerTrack.offsetHeight / 2) - (handler.offsetHeight / 2) + 'px';
            //positioning the pointer in the center of the handler
            handlerPointer.style.left = (handler.clientWidth / 2) - (handlerPointer.clientWidth / 2) + 'px';
            handlerPointer.style.top = (handler.clientWidth / 2) - (handlerPointer.clientWidth / 2) + 'px';

            //set default properties for some variables
            handlerWidth = handler.offsetWidth;
            //END SLIDER SETUP

            //SLIDER FORMULA
            /**
             * Formula structure for setting handler position according to range interval and vice versa
             * Analytic Geometry, Equation of a line /Dreapta in plan/)
             * Formula: (y - y1)/(y2-y1) = (x-x1)/(x2-x1) where:
             * y = maximum credit range, y1 = minimum credit range, y2 = given range intervals
             * x = track width, x1 = track starting point, x2 = given handler position on the track
             * Variables values to be found (necunoscutele din ecuatie):
             * x2 = handler position relative to the given range interval (y2)
             * y2 = range interval relative to the given handler position (x2)
             * @method sliderFormula
             * @param {Object} obj -An object containing the unknowns (x2, y2)
             * @returns {Object} {x: number, x1: number, x2: number, y: number, y1: number, y2: number}
             */
            function sliderFormula(obj) {
                handlerTrackWidth = handlerTrack.clientWidth - handlerWidth;

                var formulaObj = {
                    x: handlerTrackWidth,
                    x1: 0,
                    x2: obj.x2,
                    y: maxRange,
                    y1: minRange,
                    y2: obj.y2
                };

                return formulaObj;
            }

            /**
             * Calculate handler position according to range interval. Using slider formula.
             * @method calculateHandlerPosition
             * @returns {Number} -The handler position according to range interval
             */
            function calculateHandlerPosition() {
                var F, eq1, eq2, eq3;
                F = sliderFormula({x2: '', y2: rangeInterval});

                eq1 = (F.y - F.y1);
                eq2 = (F.y2 - F.y1);
                eq3 = (F.x - F.x1);
                F.x2 = (eq2 * eq3) / eq1 + F.x1;

                return F.x2;
            }

            /**
             * Calculate range interval according to handler position. Using the same slider formula.
             * @method calculateRangeInterval
             * @param {Number} x2 -Handler position on the track
             * @returns {Number} - The range interval according to handler position on the track
             */
            function calculateRangeInterval(x2) {
                var F, eq1, eq2, eq3;
                F = sliderFormula({x2: x2, y2: ''});

                eq1 = (F.y - F.y1);
                eq2 = (F.x - F.x1);
                eq3 = (F.x2 - F.x1);
                F.y2 = ((eq1 * eq3) / eq2) + F.y1;

                return F.y2;
            }
            //END SLIDER FORMULA

            //SLIDER METHODS
            /**
             * When the user writes in input fields, the value can be bigger or smaller than the given range. It all depends on the user ideas to test the limits of the validation.
             * The input fields take care of their own value validation but the slider handler should not be permitted to be positioned above or below x - x1 range
             * @method filterHandlerPosition
             * @param {Number} handlerLeftPos -Left position of the handler
             * @returns {*}
             */
            function filterHandlerPosition(handlerLeftPos) {
                return (handlerLeftPos > handlerTrackWidth) ? handlerTrackWidth : (handlerLeftPos < 0) ? 0 : handlerLeftPos;
            }

            /**
             * Positioning handler on the track
             * @method setHandlerPosition
             */
            function setHandlerPosition() {
                var x2 = filterHandlerPosition(calculateHandlerPosition());
                handler.style.left = x2 + 'px';
                //the handler fill will be placed under the handler button
                handlerFill.style.width = x2 + (handler.offsetWidth / 2) + 'px';
            }

            /**
             * Pass range interval value to the scope
             * @method updateScopeInterval
             * @param {Number} leftPos
             */
            function updateScopeRangeInterval(leftPos) {
                var rangeInterval, rangeLength, rangeIncrement;
                //add value to scope
                if (!rangeIncrementFlag) {
                    scope.rangeInterval = parseInt(calculateRangeInterval(leftPos), 10);
                    scope.$apply();
                } else {
                    rangeInterval = parseInt(calculateRangeInterval(leftPos), 10);
                    rangeLength = maxRange.toString().length;
                    rangeIncrement = (rangeLength <= 2) ? 1 : Math.pow(10, rangeLength - 1) / Math.pow(10, 1);

                    if (rangeInterval - (rangeInterval % rangeIncrement) <= minRange) {
                        scope.rangeInterval = minRange;
                    } else if (rangeInterval >= maxRange) {
                        scope.rangeInterval = maxRange;
                    } else {
                        scope.rangeInterval = rangeInterval - (rangeInterval % rangeIncrement);
                    }

                    scope.$apply();
                }
            }

            function onPointerOrMouseMove(e){
                var distance, leftPos;
                if (clickedHandlerByMouseFlag) {
                    distance = parseInt(e.clientX, 10) - startX;
                    leftPos = filterHandlerPosition(handlerLeftPos + distance);
//                    handler.style.left = leftPos + 'px';
                    //the handler fill will be placed under the handler button
//                    handlerFill.style.width = leftPos + (handler.offsetWidth / 2) + 'px';
                    updateScopeRangeInterval(leftPos);
                }
            }

            function onPointerOrMouseDown(e){
                clickedHandlerByMouseFlag = true;
                //get left position of the handler
                handlerLeftPos = parseInt(handler.style.left, 10);
                //get X coordinates of touch point
                startX = parseInt(e.clientX, 10);
            }

            function mouseUp() {
                document.onmousemove = false;
                clickedHandlerByMouseFlag = false;
            }

            //SLIDER CONTROL EVENTS
            /**
             * Fired when clicking on the handler track to position the handler at the click location.
             * e.offsetX = click location on the track. Firefox has no implementation for offsetX.
             * e.layerX = click location on the track but for Firefox. Deprecated in Chrome.
             * @event click
             */
            handlerTrack.addEventListener('click', function (e) {
                var offsetX, distance;
                offsetX = e.offsetX || e.layerX;
                distance = filterHandlerPosition(offsetX - (handler.offsetWidth / 2));
                updateScopeRangeInterval(distance);
                e.stopPropagation();
                //TODO: in Firefox, clicking forward will place the handler after the clicking location
            });

            //TOUCH CONTROL OVER THE HANDLER
            /**
             * Fired when clicking on the handler.
             * This event was added to cancel bubbling up of the click event on its parent container (handler track)
             * @event click
             */
            handler.addEventListener('click', function (e) {
                e.stopPropagation();
            });

            /**
             * Getting left position of the handler and X coordinates of the touch point
             * @event touchstart
             */
            handler.addEventListener('touchstart', function (e) {
                var touchObj;
                //first touch point
                touchObj = e.changedTouches[0];
                //get left position of the handler
                handlerLeftPos = parseInt(handler.style.left, 10);
                //get X coordinates of touch point
                startX = parseInt(touchObj.clientX, 10);
                //prevent default click behavior
                e.preventDefault();
                e.stopPropagation();
            }, false);

            /**
             * Moving the handler on the track.
             * @event touchmove
             */
            handler.addEventListener('touchmove', function (e) {
                var touchObj, distance, leftPos;
                //first touch point for this event
                touchObj = e.changedTouches[0];
                //calculate distance traveled by touch point
                distance = parseInt(touchObj.clientX, 10) - startX;
                //calculate next handler position
                leftPos = filterHandlerPosition(handlerLeftPos + distance);

                updateScopeRangeInterval(leftPos);

                //prevent default click behavior
                e.preventDefault();
                e.stopPropagation();
            }, false);

            /**
             * Getting left position of the handler and X coordinates of touch point.
             * Windows touch down event. It will be deprecated on IE 11, being replaced with pointerdown
             * @event MSPointerDown
             */
            handler.addEventListener('MSPointerDown', onPointerOrMouseDown);

            //MOVING THE HANDLER USING WINDOWS MOBILE DEVICES
            /**
             * In order to move the handler successfully, an -ms-touch-action rule with a value of none must be added on
             * targeted element, otherwise an unexpected event (MSPointerCancel) will be triggered when moving finger too fast.
             * It will act like a swiping event over the element.
             * That's because MSPointerCancel will be dispatched when either (1) the system has determined
             * that a pointer is unlikely to continue to produce events (for example, due to a hardware event),
             * or (2) after having fired the MSPointerDown event, the pointer is subsequently used to manipulate the page viewport (for example, panning or zooming).
             */
            $(handler).css('-ms-touch-action', 'none');

            /**
             * Windows touch move event. It will be deprecated on IE 11, being replaced with pointermove
             * @event MSPointerMove
             */
            handler.addEventListener('MSPointerMove', onPointerOrMouseMove);

            //MOVING THE HANDLER USING MOUSE
            /**
             * @event mousedown
             */
            handler.addEventListener('mousedown', onPointerOrMouseDown);

            /**
             * Moving the handler by mouse.
             * This event was added on the document element because trying to drag an object with the mouse will result in a faulty operation
             * as the cursor will jump outside of the dragged element if moved quickly. The event will stop firing when this happens
             * until the mouse moves back over the dragged element. Adding the event on the document fixes this problem.
             * @event mousemove
             */
            document.addEventListener('mousemove', onPointerOrMouseMove);

            /**
             * Removing document event handlers and reset dragging flag so that mouse drag process can start again
             * @event mouseup
             */
            document.addEventListener('mouseup', mouseUp);

            //REPOSITION HANDLER AFTER RESIZING WINDOW
            /**
             * Resetting handler position on window resizing
             * @event resize
             */
            $(window).resize(setHandlerPosition);
            //END SLIDER CONTROL EVENTS

            //unbind events
            scope.$on('$destroy', function () {
                $(document).unbind('mouseup', mouseUp);
                $(window).unbind('resize', setHandlerPosition);
            });

            //ANGULAR
            scope.$watch('rangeInterval + minRange + maxRange', function () {
                rangeInterval = scope.rangeInterval;
                minRange = scope.minRange;
                maxRange = scope.maxRange;
                rangeIncrementFlag = scope.rangeIncrementFlag;
                setHandlerPosition();
            });
            //END ANGULAR
        }
    };
}