<?php

namespace App\Models;

use App\Presenters\BasePresenter;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Base
 *
 * @mixin \Eloquent
 */
class Base extends Model
{
    protected $presenterInstance;

    protected $presenter = BasePresenter::class;

    public function present()
    {
        if (!$this->presenterInstance) {
            $this->presenterInstance = new $this->presenter($this);
        }

        return $this->presenterInstance;
    }

    /**
     * @return string
     */
    public static function getTableName()
    {
        return with(new static())->getTable();
    }

    public function getEditableColumns()
    {
        return $this->fillable;
    }

    public function getPrimaryKey()
    {
        return $this->primaryKey;
    }

    public function getLocalizedColumn($key)
    {
        $locale = \App::getLocale();
        if (empty($locale)) {
            $locale = 'en';
        }
        $localizedKey = $key.'_'.strtolower($locale);
        $value = $this->$localizedKey;
        if (empty($value)) {
            $localizedKey = $key.'_en';
            $value = $this->$localizedKey;
        }

        return $value;
    }

    /**
     * @return array
     */
    public function toAPIArray()
    {
        return [];
    }

    public function getFillableColumns()
    {
        return $this->fillable;
    }
}
