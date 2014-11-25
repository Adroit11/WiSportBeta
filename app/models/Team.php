<?php

class Team extends \Eloquent {
	protected $fillable = ['teamName'];

    public function scopeSelect($query, $title = 'Select') {
        $selectVals[''] = $title;
        $selectVals += $this->lists('name', 'id');
        return $selectVals;
    }
}