<?php

/**
 * This is the model class for table "repeaterlist".
 *
 * The followings are the available columns in table 'repeaterlist':
 * @property integer $id
 * @property string $callsign
 * @property string $band
 * @property string $channel
 * @property string $out
 * @property string $in
 * @property string $blank
 * @property string $mode
 * @property string $qthr
 * @property string $location
 * @property string $ngr
 * @property string $reg
 * @property string $ctcss
 * @property string $keeper
 * @property string $lat
 * @property string $long
 * @property integer $status
 */
class Repeater extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'repeaterlist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('callsign, band, channel, out, in, blank, mode, qthr, location, ngr, reg, ctcss, keeper, lat, long, status', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
            array('lat', 'type', 'type'=>'float'),
            array('long', 'type', 'type'=>'float'),
            array('out', 'type', 'type'=>'float'),
            array('in', 'type', 'type'=>'float'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, callsign, band, channel, out, in, blank, mode, qthr, location, ngr, reg, ctcss, keeper, lat, long, status', 'safe', 'on'=>'search'),
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
		);
	}

    public function repeaterStatuses()
    {
        return array(
            0 => "red",
            1 => "green",
            2 => "blue",
            3 => "orange"
        );
    }

    public function repeaterNumberStatuses()
    {
        $result = array();
        foreach ($this->repeaterStatuses() as $key => $value){
            $result = @array_merge($result, array($key => strval($key).'. '.$value));
        }
        return $result;
    }

    public function getStatus()
    {
        $repeaterStatuses = $this->repeaterStatuses();
        return $repeaterStatuses[$this->status];
    }

    public function repeaterModes()
    {
        return array(
            "analog" => "analog",
            "digital" => "digital"
        );
    }

    public function repeaterBands()
    {
        return array(
            "70CM" => "70CM",
            "2M" => "2M"
        );
    }

    private function repeaterIconModes()
    {
        return array(
            "analog" => "tower",
            "digital" => "dstar"
        );
    }

    public function getImage()
    {
        $repeaterStatuses = $this->repeaterStatuses();
        $repeaterIconModes = $this->repeaterIconModes();

        return '/images/icon_'.$repeaterIconModes[$this->mode].'_'.$repeaterStatuses[$this->status].'.png';
    }

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'callsign' => 'Callsign',
			'band' => 'Band',
			'channel' => 'Channel',
			'out' => 'Output',
			'in' => 'Input',
			'blank' => 'Blank',
			'mode' => 'Mode',
			'qthr' => 'Locator',
			'location' => 'Location',
			'ngr' => 'Echolink',
			'reg' => 'Above Sea Level',
			'ctcss' => 'Tone',
			'keeper' => 'Keeper',
			'lat' => 'Latitude',
			'long' => 'Longitude',
			'status' => 'Status'
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('callsign',$this->callsign,true);
		$criteria->compare('band',$this->band,true);
		$criteria->compare('channel',$this->channel,true);
		$criteria->compare('out',$this->out,true);
		$criteria->compare(Repeater::model()->getTableSchema()->getColumn('in')->rawName,$this->in,true);
		$criteria->compare('mode',$this->mode,true);
		$criteria->compare('qthr',$this->qthr,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('ngr',$this->ngr,true);
		$criteria->compare('reg',$this->reg,true);
		$criteria->compare('ctcss',$this->ctcss,true);
		$criteria->compare('keeper',$this->keeper,true);
		$criteria->compare('lat',$this->lat,true);
		$criteria->compare('long',$this->long,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort'=>array(
                'defaultOrder'=>'callsign ASC',
            )
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Repeater the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
