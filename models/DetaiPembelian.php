<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detai_pembelian".
 *
 * @property int $no_faktur
 * @property int $id_barang
 * @property string $jumlah
 */
class DetaiPembelian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detai_pembelian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_faktur', 'id_barang', 'jumlah'], 'required'],
            [['no_faktur', 'id_barang'], 'integer'],
            [['jumlah'], 'string', 'max' => 50],
            [['no_faktur'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_faktur' => Yii::t('app', 'No Faktur'),
            'id_barang' => Yii::t('app', 'Id Barang'),
            'jumlah' => Yii::t('app', 'Jumlah'),
        ];
    }

    public function getBarang()
    {
        return $this->hasOne(Barang::className(), ['id_barang' => 'id_barang']);
    }
}
