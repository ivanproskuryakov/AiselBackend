'use strict';

/**
 * @ngdoc overview
 * @name aiselApp
 *
 * @description
 * ...
 */

define(['app'], function (app) {
    app.controller('UserCtrl', ['$log', '$modal', '$scope', '$routeParams', 'userService', 'notify',
        function ($log, $modal, $scope, $routeParams, userService, notify) {

            $scope.loggedIn = false;
            // User Registration
            $scope.submitRegistration = function (form) {
                if (form.$valid) {
                    userService.register(form).success(
                        function (data, status) {
                            notify(data.message);
                            if (data.status) {
                                window.location = "/";
                            }
                        }
                    );
                }
            };

            // User Edit Details
            $scope.submitEditUserDetails = function (form) {
                if (form.$valid) {
                    userService.editDetails(form).success(
                        function (data, status) {
                            notify(data.message);
//                        if (data.status) {
//                            window.location = "/#/user/information/";
//                        }
                        }
                    );
                }
            };

            // User Password Forgot
            $scope.submitPasswordForgot = function (form) {
                if (form.$valid) {
                    userService.passwordforgot(form).success(
                        function (data, status) {
                            notify(data.message);
                            if (data.status) {
//                            window.location = "/";
                                window.location = "/";
                            }
                        }
                    );
                }
            };

            // User Sign In/Out
            $scope.signOut = function () {
                userService.signout($scope).success(
                    function (data, status) {
                        notify(data.message);
                        window.location = "/";
                    }
                );

            }
            $scope.openSignIn = function () {
                var modalInstance = $modal.open({
                    templateUrl: 'app/Aisel/User/views/login.html',
                    controller: LoginInstanceCtrl,
                    resolve: {}
                });
            };

        }]);

    var LoginInstanceCtrl = function ($scope, $modalInstance, userService, $rootScope, notify) {
        $scope.login = function (username, password) {

            userService.login(username, password).success(
                function (data, status) {
                    notify(data.message);
                    if (data.status) {
//                        window.location = "/" + $rootScope.locale + "/user/information/";
                        window.location = "/";
                    }
                }
            );
        };

        $scope.cancel = function () {
            $modalInstance.dismiss('cancel');
        };
    };
});