/* 
 * Elaborado por Luis Ubaldo Godínez
 * Módulo de angularjs que realiza la petición ajax y llena la tabla del cotizador.
 */

var dinkabitApp=angular.module('DinkabitApp',[]).config(['$httpProvider',function($httpProvider){
    //Encabezados necesarios por angularjs y laravel
    $httpProvider.defaults.headers.post['Content-Type']='application/x-www-form-urlencoded;charset=utf-8';
    $httpProvider.defaults.headers.common['X-Requested-With']="XMLHttpRequest";
    $httpProvider.defaults.headers.post['X-CSRF-TOKEN']=$('meta[name=_token]').attr('content');
}]);

dinkabitApp.controller('CotizadorCtrl',function($scope,$http){
   $scope.show=function(){
       var promise=$http({
           method:'POST',
           url:'tablacotizador',
           data:$.param({'monto':$scope.monto,'quincenas':$scope.quincenas})
           
       });
       promise.success(function(data,status,header,config){
           if(data === 'Datos invalidos'){
               $scope.results=false;
           }else{
               $scope.results=true;
               $scope.pagos=data;
           }
           
       });
   }; 
});


