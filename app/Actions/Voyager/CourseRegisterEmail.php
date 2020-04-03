<?php

namespace App\Actions\Voyager;

use TCG\Voyager\Actions\AbstractAction;

/**
 * Class CourseRegisterEmail
 * @package App\Actions\Voyager
 */
class CourseRegisterEmail extends AbstractAction
{
    /**
     * @return string
     */
    public function getTitle()
    {
        return 'Send Email';
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return 'voyager-bolt';
    }

    /**
     * @return string|void
     */
    public function getPolicy()
    {
        return 'edit';
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return [
            'class' => 'btn btn-success action-send-email',
        ];
    }

    /**
     * @return string
     */
    public function getDefaultRoute()
    {
        return route('voyager.' . $this->dataType->slug . '.sendemail', $this->data->{$this->data->getKeyName()});
    }

    /**
     * @return bool
     */
    public function shouldActionDisplayOnDataType()
    {
        if ($this->dataType->slug == 'course-register') {
            return true;
        }
        return false;
    }

}
