<?php
/**
 * ����Ŀ�경����� Model
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-11-14
 * Time: 15:03
 */
class GoalManageModel extends model{
    public $contactRule = array(
        array('name','require','�����������', self::MUST_VALIDATE, 'regex'),

    );
}