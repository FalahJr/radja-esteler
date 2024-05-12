<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wisata".
 *
 * @property int $id
 * @property string $judul
 * @property int $wisata_kategori_id
 * @property string $deskripsi
 * @property string $alamat
 * @property string $gambar
 * @property string $latitude_y
 * @property string $longitude_x
 * @property string $url_maps
 * @property string $created_at
 * @property string $update_at
 * @property string $created_date
 * @property string $update_date
 *
 * @property WisataKategori $wisataKategori
 */
class Wisata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wisata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'wisata_kategori_id', 'deskripsi', 'alamat', 'gambar', 'latitude_y', 'longitude_x', 'url_maps', 'created_at', 'update_at', 'created_date', 'update_date'], 'required'],
            [['wisata_kategori_id'], 'integer'],
            [['deskripsi'], 'string'],
            [['created_date', 'update_date'], 'safe'],
            [['judul', 'created_at', 'update_at'], 'string', 'max' => 100],
            [['alamat', 'gambar', 'latitude_y', 'longitude_x', 'url_maps'], 'string', 'max' => 255],
            [['wisata_kategori_id'], 'exist', 'skipOnError' => true, 'targetClass' => WisataKategori::className(), 'targetAttribute' => ['wisata_kategori_id' => 'id']],
            [['gambar'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'wisata_kategori_id' => 'Wisata Kategori ID',
            'deskripsi' => 'Deskripsi',
            'alamat' => 'Alamat',
            'gambar' => 'Gambar',
            'latitude_y' => 'Latitude Y',
            'longitude_x' => 'Longitude X',
            'url_maps' => 'Url Maps',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
            'created_date' => 'Created Date',
            'update_date' => 'Update Date',
        ];
    }

    /**
     * Gets query for [[WisataKategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWisataKategori()
    {
        return $this->hasOne(WisataKategori::className(), ['id' => 'wisata_kategori_id']);
    }
}
