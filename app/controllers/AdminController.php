<?php


class AdminController extends BaseController {

    public function index()
    {
        return View::make('admin.index');
    }

    public function getUpload()
    {
        return View::make('admin.upload');
    }

    public function getUploadTest()
    {
        return View::make('admin.uploadcsv');

    }

    public function getTestUpload()
    {
        return View::make('admin.testUpload');
    }


}