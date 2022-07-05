<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id_barang
 * @property string $nama
 * @property string $merek
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_barang', 'nama', 'merek'], 'required'],
            [['id_barang'], 'integer'],
            [['nama', 'merek'], 'string', 'max' => 30],
            [['id_barang'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_barang' => Yii::t('app', 'Id Barang'),
            'nama' => Yii::t('app', 'Nama'),
            'merek' => Yii::t('app', 'Merek'),
        ];
    }
}
