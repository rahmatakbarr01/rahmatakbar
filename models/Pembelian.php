<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembelian".
 *
 * @property int $no_faktur
 * @property int $id_supplier
 * @property int $id_pegawai
 * @property string $tanggal
 * @property string $total
 */
class Pembelian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembelian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_faktur', 'id_supplier', 'id_pegawai', 'tanggal', 'total'], 'required'],
            [['no_faktur', 'id_supplier', 'id_pegawai'], 'integer'],
            [['tanggal'], 'safe'],
            [['total'], 'string', 'max' => 50],
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
            'id_supplier' => Yii::t('app', 'Id Supplier'),
            'id_pegawai' => Yii::t('app', 'Id Pegawai'),
            'tanggal' => Yii::t('app', 'Tanggal'),
            'total' => Yii::t('app', 'Total'),
        ];
    }

    public function getSupplier()
    {
        return $this->hasOne(Supplier::className(), ['id_supplier' => 'id_supplier']);
    }
}
