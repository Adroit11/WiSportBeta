<?php

class ResultsController extends BaseController {


    public function getResultsToUpload()
    {
        echo Input::get('file');
        if(Input::hasFile('file')){
            echo 'found it!';
        } else {
            echo 'lost';
        }
        $upload_success = null;
        $destinationPath = '';
        $filename        = '';

        if (Input::hasFile('file')) {
            $file            = Input::file('file');
            $destinationPath = public_path().'/uploads/';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $uploadSuccess   = $file->move($destinationPath, $filename);
        } else {
            Return 'Failed';
        }

            $readFile = $destinationPath.$filename;
            $reader = new \EasyCSV\Reader($readFile);

        echo print_r($reader->getRow());
            /*while ($row = $reader->getRow()) {
                print_r($row);
            }*/

        //echo $fullPath;
    }

    private function _import_csv($path, $filename)
    {

        $csv = $path . $filename;

        //ofcourse you have to modify that with proper table and field names
        $query = sprintf("LOAD DATA local INFILE '%s' INTO TABLE your_table FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '\"' ESCAPED BY '\"' LINES TERMINATED BY '\\n' IGNORE 0 LINES (`filed_one`, `field_two`, `field_three`)", addslashes($csv));

        return DB::connection()->getpdo()->exec($query);

    }
}