<?php
namespace ls\interfaces;


/**
 * Interface iResponse
 * @package ls\interfaces
 * Objects implementing this interface can be used to store response data.
 * The default implementation store it in database (for live surveys)
 * Or in session (for previews).
 */
interface iResponse {

    /**
     * @return string The UUID for this response.
     */
    public function getId();

    /**
     * @return string The token for this response, or null if none exists.
     */
    public function getToken();

    /**
     * Load the class given an ID,
     * @param string $id The UUID for this response.
     * @return self Returns the loaded response or null if not found.
     */
    public static function loadById($id);


    /**
     * @return [] An array containing the response data.
     */
    public function getAttributes($names = null);

    /**
     * Stores a file with the response.
     * @param $field
     * @param \Psr\Http\Message\UploadedFileInterface[] $file
     */
    public function setFiles($field, array $files);
}