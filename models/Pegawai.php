<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_pegawai
 * @property string $nama
 * @property string $alamat
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pegawai', 'nama', 'alamat'], 'required'],
            [['id_pegawai'], 'integer'],
            [['nama', 'alamat'], 'string', 'max' => 50],
            [['id_pegawai'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => Yii::t('app', 'Id Pegawai'),
            'nama' => Yii::t('app', 'Nama'),
            'alamat' => Yii::t('app', 'Alamat'),
        ];
    }
}
