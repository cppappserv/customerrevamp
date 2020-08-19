<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return Admin::content(function (Content $content) {

            // optional
            $content->header('page header');
    
            // optional
            $content->description('page description');
    
            // add breadcrumb since v1.5.7
            $content->breadcrumb(
                ['text' => 'Dashboard', 'url' => '/admin'],
                ['text' => 'User management', 'url' => '/admin/users'],
                ['text' => 'Edit user']
            );
    
            // Fill the page body part, you can put any renderable objects here
            $content->body('hello world');
    
            // Add another contents into body
            $content->body('foo bar');
    
            // method `row` is alias for `body`
            $content->row('hello world');
    
            // Direct rendering view, Since v1.6.12
            $content->view('dashboard', ['data' => 'foo']);
        });

        /*return $content
            ->title('Dashboard')
            ->description('CRM Send WA/SMS Message...')
            ->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });*/
            
            
    }
}
