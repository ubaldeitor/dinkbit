/**
 * Created by AlexCD on 14.05.2014.
 */
function CheckRange() {
    return {
        require: 'ngModel',
        scope: {
            rangeInterval: '=',
            min: '=',
            max: '='
        },
        link: function(scope, element, attrs, ctrl) {

            function checkRange(value) {
                var validity = !(value < scope.min || value > scope.max);

                ctrl.$setValidity('range', validity);

                return value;
            }

            ctrl.$formatters.push(checkRange);

            ctrl.$parsers.push(checkRange);

        }
    };
}
