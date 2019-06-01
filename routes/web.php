<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@login')->name('loginIndex');

Auth::routes();

//handles login
Route::post('/loginHandler', [
    'uses' => 'LoginController@login',
    'as' => 'loginHandler',
]);

//admin routes protected by admin middleware
Route::group(['middleware' => ['acheck']], function(){
    Route::get('/admin', 'PagesController@adminIndex')->name('admin');

    //change password routes
    Route::get('/admin/change-password', 'ChangePasswordController@adminChangePassword');
    Route::post('/admin/change-password', 'ChangePasswordController@processPasswordChange');

    //Employee Routes
    Route::get('/admin/add-employee', 'EmployeesController@adminAddEmployee');
    Route::post('/admin/add-employee', 'EmployeesController@processEmployee');
    Route::get('/admin/employee-listings', 'EmployeesController@adminShowEmployees');
    Route::get('/admin/edit-employee/{id}', 'EmployeesController@adminShowEdit');
    Route::post('/admin/edit-employee/{id}', 'EmployeesController@adminDoEdit');

    Route::get('/admin/employee-bank-details', 'EmployeesController@adminShowBankDetails');
    Route::post('/admin/employee-bank-details', 'EmployeesController@adminUpdateBankDetail');


    //Role Routes
    Route::get('/admin/add-role', 'RolesController@adminAddRole');
    Route::post('/admin/add-role', 'RolesController@processRole');
    Route::get('/admin/role-listings', 'RolesController@adminShowRoles');
    Route::get('/admin/edit-role/{id}', 'RolesController@adminShowEdit');
    Route::post('/admin/edit-role/{id}', 'RolesController@adminDoEdit');
    Route::get('/admin/delete-role/{id}', 'RolesController@adminDoDelete');

    //Department Routes
    Route::get('/admin/add-department', 'DepartmentsController@adminAddDepartment');
    Route::post('/admin/add-department', 'DepartmentsController@processDepartment');
    Route::get('/admin/department-listings', 'DepartmentsController@adminShowDepartments');
    Route::get('/admin/edit-department/{id}', 'DepartmentsController@adminShowEdit');
    Route::post('/admin/edit-department/{id}', 'DepartmentsController@adminDoEdit');
    Route::get('/admin/delete-department/{id}', 'DepartmentsController@adminDoDelete');

    //Leave Type Routes
    Route::get('/admin/add-leave-type', 'LeaveTypesController@adminAddLeaveType');
    Route::post('/admin/add-leave-type', 'LeaveTypesController@processLeaveType');
    Route::get('/admin/leave-type-listings', 'LeaveTypesController@adminShowLeaveTypes');
    Route::get('/admin/edit-leave-type/{id}', 'LeaveTypesController@adminShowEdit');
    Route::post('/admin/edit-leave-type/{id}', 'LeaveTypesController@adminDoEdit');
    Route::get('/admin/delete-leave-type/{id}', 'LeaveTypesController@adminDoDelete');

    //Employee Leave Routes
    Route::get('/admin/apply-leave', 'LeavesController@adminApplyLeave');
    Route::post('/admin/apply-leave', 'LeavesController@adminProcessApply');
    Route::get('/admin/total-leave-listings', 'LeavesController@adminShowTotalLeaves');
    Route::post('/admin/total-leave-listings', 'LeavesController@adminProcessResponse');
    Route::get('/admin/my-leave-list', 'LeavesController@adminShowMyLeaves');
    Route::post('/admin/my-leave-list', 'LeavesController@adminProcessEdit');

    //Promotion Routes
    Route::get('/admin/promote', 'EmployeesController@doPromotion');
    Route::post('/admin/promote', 'EmployeesController@processPromotion');
    Route::get('/admin/promotion-listings', 'EmployeesController@adminShowPromotions');
    Route::post('/admin/promotion-listings', 'EmployeesController@adminProcessResponse');

    //Training Routes
    Route::get('/admin/add-training-program', 'TrainingsController@adminAddTraining');
    Route::post('/admin/add-training-program', 'TrainingsController@adminProcessTraining');
    Route::get('/admin/program-listings', 'TrainingsController@adminShowPrograms');
    Route::post('/admin/program-listings', 'TrainingsController@adminProcessEditProgram');
    Route::get('/admin/training-invite', 'TrainingsController@adminAddTrainingInvite');
    Route::post('/admin/training-invite', 'TrainingsController@adminProcessTrainingInvite');
    Route::get('/admin/invitation-listings', 'TrainingsController@adminInvitationListing');
    Route::post('/admin/invitation-listings', 'TrainingsController@adminProcessInvitationListing');

    //holiday Routes
    Route::get('/admin/add-holiday', 'HolidaysController@adminAddHoliday');
    Route::post('/admin/add-holiday', 'HolidaysController@adminProcessHoliday');
    Route::get('/admin/holiday-listings', 'HolidaysController@adminShowHolidays');
    Route::post('/admin/holiday-listings', 'HolidaysController@adminProcessEditHoliday');

    //Company Policy
    Route::get('/admin/company-policy', 'PagesController@adminShowCompanyPolicy');
});

//manager routes protected by admin middleware
Route::group(['middleware' => ['mcheck']], function(){
    Route::get('/manager', 'PagesController@managerIndex')->name('manager');
});

//general employee routes protected by admin middleware
Route::group(['middleware' => ['gecheck']], function(){
    Route::get('/home', 'PagesController@homeIndex')->name('home');
});




