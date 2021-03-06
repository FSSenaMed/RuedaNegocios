<?php

/**
 * This is the model class for table "{{participante}}".
 *
 * The followings are the available columns in table '{{participante}}':
 * @property integer $part_id
 * @property string $parti_imagen
 * @property string $parti_nombreempresa
 * @property string $parti_nit
 * @property string $parti_nom_represantante
 * @property string $parti_direccion
 * @property string $parti_departamento
 * @property integer $parti_ciudad
 * @property string $parti_email
 * @property string $parti_telefono
 * @property string $parti_celular
 * @property string $parti_fax
 * @property string $parti_web
 * @property string $parti_ntrabajadores
 * @property integer $parti_sector
 * @property string $password
 * @property integer $parti_estado
 * @property string $canfir_passwor
 * @property string $mesa
 *
 * The followings are the available model relations:
 * @property Sectoremp $partiSector
 * @property Municipio $partiCiudad
 * @property Producto[] $productos
 * @property Registro[] $registros
 */
class TblParticipante extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TblParticipante the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{participante}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parti_nombreempresa, parti_nit, parti_nom_represantante, parti_direccion, parti_departamento, parti_ciudad, parti_email, parti_telefono, parti_celular, parti_ntrabajadores, parti_sector, password, canfir_passwor', 'required'),
			array('parti_ciudad, parti_sector, parti_estado', 'numerical', 'integerOnly'=>true),
			array('parti_imagen', 'length', 'max'=>200),
			array('parti_nombreempresa, parti_nit, parti_nom_represantante, parti_email, parti_telefono, parti_celular, parti_fax, parti_web, parti_ntrabajadores, password, canfir_passwor', 'length', 'max'=>45),
			array('parti_direccion', 'length', 'max'=>60),
			array('parti_departamento', 'length', 'max'=>2),
			array('mesa', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('part_id, parti_imagen, parti_nombreempresa, parti_nit, parti_nom_represantante, parti_direccion, parti_departamento, parti_ciudad, parti_email, parti_telefono, parti_celular, parti_fax, parti_web, parti_ntrabajadores, parti_sector, password, parti_estado, canfir_passwor, mesa', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'partiSector' => array(self::BELONGS_TO, 'TblSectoremp', 'parti_sector'),
			'partiCiudad' => array(self::BELONGS_TO, 'TblMunicipio', 'parti_ciudad'),
			'productos' => array(self::HAS_MANY, 'Producto', 'parti_id'),
			'registros' => array(self::HAS_MANY, 'Registro', 'parti_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
            'foto'=>'Logo',
			'part_id' => 'Id',
			'parti_imagen' => 'Imagen',
			'parti_nombreempresa' => 'Empresa',
			'parti_nit' => 'Nit',
			'parti_nom_represantante' => 'Represantante',
			'parti_direccion' => 'Direccion',
			'parti_departamento' => 'Departamento',
			'parti_ciudad' => 'Ciudad',
			'parti_email' => 'Email',
			'parti_telefono' => 'Telefono',
			'parti_fax' => 'Fax',
			'parti_web' => 'Web',
			'parti_ntrabajadores' => 'Numero trabajadores',
			'parti_sector' => 'Sector empresarial',
          	'parti_celular' => 'Celular',
			'password' => 'contraseña',
			'parti_estado' => 'Parti Estado',
			'canfir_passwor' => 'Confirmar Contraseña',
			'mesa' => 'Mesa',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('part_id',$this->part_id);
		$criteria->compare('parti_imagen',$this->parti_imagen,true);
		$criteria->compare('parti_nombreempresa',$this->parti_nombreempresa,true);
		$criteria->compare('parti_nit',$this->parti_nit,true);
		$criteria->compare('parti_nom_represantante',$this->parti_nom_represantante,true);
		$criteria->compare('parti_direccion',$this->parti_direccion,true);
		$criteria->compare('parti_departamento',$this->parti_departamento,true);
		$criteria->compare('parti_ciudad',$this->parti_ciudad);
		$criteria->compare('parti_email',$this->parti_email,true);
		$criteria->compare('parti_telefono',$this->parti_telefono,true);
		$criteria->compare('parti_celular',$this->parti_celular,true);
		$criteria->compare('parti_fax',$this->parti_fax,true);
		$criteria->compare('parti_web',$this->parti_web,true);
		$criteria->compare('parti_ntrabajadores',$this->parti_ntrabajadores,true);
		$criteria->compare('parti_sector',$this->parti_sector);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('parti_estado',$this->parti_estado);
		$criteria->compare('canfir_passwor',$this->canfir_passwor,true);
		$criteria->compare('mesa',$this->mesa,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}