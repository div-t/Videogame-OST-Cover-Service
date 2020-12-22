<?php
class Song implements JsonSerializable {
    private $uniqueID;
    private $name;
    private $artist;
    private $trackNumber;
    private $duration;

    /**
     * Song constructor.
     * @param $uniqueID
     * @param $name
     * @param $artist
     * @param $trackNumber
     * @param $duration
     */
    public function __construct($uniqueID, $name, $artist, $trackNumber, $duration) {
        $this->uniqueID = $uniqueID;
        $this->name = $name;
        $this->artist = $artist;
        $this->trackNumber = $trackNumber;
        $this->duration = $duration;
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
    public function getName() {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getArtist() {
        return $this->artist;
    }

    /**
     * @return mixed
     */
    public function getTrackNumber() {
        return $this->trackNumber;
    }

    /**
     * @return mixed
     */
    public function getDuration() {
        return $this->duration;
    }

    public function jsonSerialize() {
        return array(
            'Unique ID' => $this->getUniqueID(),
            'Artist' => $this->getArtist(),
            'Name' => $this->getName(),
            'Track Number' => $this->getTrackNumber(),
            'Duration' => $this->getDuration());
    }
}