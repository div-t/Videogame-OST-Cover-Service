<?php
require_once("Song.php");

class OST implements JsonSerializable {
    private $uniqueID;
    private $OSTName;
    private $videoGameName;
    private $releaseYear;
    private $trackList = [];

    /**
     * OST constructor.
     * @param $uniqueID
     * @param $OSTName
     * @param $videoGameName
     * @param $releaseYear
     * @param array $trackList
     */
    public function __construct($uniqueID, $OSTName, $videoGameName, $releaseYear, array $trackList) {
        $this->uniqueID = $uniqueID;
        $this->OSTName = $OSTName;
        $this->videoGameName = $videoGameName;
        $this->releaseYear = $releaseYear;
        $this->trackList = $trackList;
    }

    /**
     * @return mixed
     */
    public function getUniqueID() {
        return $this->uniqueID;
    }

    /**
     * @return mixed
     */
    public function getOSTName() {
        return $this->OSTName;
    }

    /**
     * @return mixed
     */
    public function getVideoGameName() {
        return $this->videoGameName;
    }

    /**
     * @return mixed
     */
    public function getReleaseYear() {
        return $this->releaseYear;
    }

    /**
     * @return array
     */
    public function getTrackList() {
        return $this->trackList;
    }


    /**
     * @inheritDoc
     */
    public function jsonSerialize() {
        return array(
            'Unique ID' => $this->getUniqueID(),
            'OST Name' => $this->getOSTName(),
            'Video Game Name' => $this->getVideoGameName(),
            'Realease Year' => $this->getReleaseYear(),
            'Track List' => $this->getTrackList()
        );
    }
}