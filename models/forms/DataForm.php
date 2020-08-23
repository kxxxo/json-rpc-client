<?php

namespace app\models\forms;

use yii\base\Model;

/**
 * This is the model class for DataForm
 *
 * @property int $id
 * @property string $page_uid
 * @property string $field_string
 * @property int $field_integer
 * @property bool $field_boolean
 */
class DataForm extends Model
{
    /** @var string $page_uid  */
    public $page_uid;
    /** @var string $field_string */
    public $field_string;
    /** @var integer $field_integer */
    public $field_integer;
    /** @var boolean $field_boolean */
    public $field_boolean;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page_uid', 'field_string', 'field_integer', 'field_boolean'], 'required'],
            [['page_uid', 'field_string'], 'string'],
            [['field_integer'], 'default', 'value' => null],
            [['field_integer'], 'integer'],
            [['field_boolean'], 'boolean'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page_uid' => 'Page Uid',
            'field_string' => 'Field String',
            'field_integer' => 'Field Integer',
            'field_boolean' => 'Field Boolean',
        ];
    }

}
