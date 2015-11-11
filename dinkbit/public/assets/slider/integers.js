/**
 * Created by AlexCD on 06.05.2014.
 */
function Integers() {
    return {
        require: 'ngModel',
        link: function(scope, element, attrs, ctrl) {

            function filterValue(value){

                var regex = /[^0-9]/;

                if(value && regex.test(value)){
                    var filteredValue = value.replace(regex, '');
                    ctrl.$setViewValue(filteredValue);
                    ctrl.$render();

                    return filteredValue;
                }

                return value;
            }

            ctrl.$parsers.push(filterValue);
        }
    };
}