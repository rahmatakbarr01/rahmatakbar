<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property int $id_supplier
 * @property string $nama
 * @property string $alamat
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_supplier', 'nama', 'alamat'], 'required'],
            [['id_supplier'], 'integer'],
            [['nama', 'alamat'], 'string', 'max' => 50],
            [['id_supplier'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_supplier' => Yii::t('app', 'Id Supplier'),
            'nama' => Yii::t('app', 'Nama'),
            'alamat' => Yii::t('app', 'Alamat'),
        ];
    }
}
