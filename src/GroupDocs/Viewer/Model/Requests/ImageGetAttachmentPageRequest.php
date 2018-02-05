<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ImageGetAttachmentPageRequest.php">
 *   Copyright (c) 2003-2018 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */
namespace GroupDocs\Viewer\Model\Requests;

/*
 * Request model for imageGetAttachmentPage" operation.
 */
class ImageGetAttachmentPageRequest
{
    /*
     * Initializes a new instance of the ImageGetAttachmentPageRequest class.
     *
     * @param string $fileName The file name.
     * @param string $attachmentName Name of the attachment.
     * @param int $pageNumber The attachment page number.
     * @param string $format The image format (jpg, png or bmp). Default value is png.
     * @param int $width The image width.
     * @param int $height The image height.
     * @param int $quality The image quality for jpg format. Default value is 90.
     * @param string $password The document password.
     * @param string $attachmentPassword The attachment password.
     * @param bool $extractText When this options is set to true text contained in document will be extracted and returned along with other information.
     * @param bool $renderComments Allows to render document comments.
     * @param bool $renderHiddenPages Enables document hidden pages, sheets or slides rendering.
     * @param string $defaultFontName The name of the default font.
     * @param string $fontsFolder The folder with custom fonts in storage.
     * @param string $folder The folder which contains specified file in storage.
     * @param string $storage The file storage which have to be used.
     */
    public function __construct($fileName, $attachmentName, $pageNumber, $format = null, $width = null, $height = null, $quality = null, $password = null, $attachmentPassword = null, $extractText = null, $renderComments = null, $renderHiddenPages = null, $defaultFontName = null, $fontsFolder = null, $folder = null, $storage = null)
    {
        $this->fileName = $fileName;
        $this->attachmentName = $attachmentName;
        $this->pageNumber = $pageNumber;
        $this->format = $format;
        $this->width = $width;
        $this->height = $height;
        $this->quality = $quality;
        $this->password = $password;
        $this->attachmentPassword = $attachmentPassword;
        $this->extractText = $extractText;
        $this->renderComments = $renderComments;
        $this->renderHiddenPages = $renderHiddenPages;
        $this->defaultFontName = $defaultFontName;
        $this->fontsFolder = $fontsFolder;
        $this->folder = $folder;
        $this->storage = $storage;
    }

    /*
     * The file name.
     */
    public $fileName;
    
    /*
     * Name of the attachment.
     */
    public $attachmentName;
    
    /*
     * The attachment page number.
     */
    public $pageNumber;
    
    /*
     * The image format (jpg, png or bmp). Default value is png.
     */
    public $format;
    
    /*
     * The image width.
     */
    public $width;
    
    /*
     * The image height.
     */
    public $height;
    
    /*
     * The image quality for jpg format. Default value is 90.
     */
    public $quality;
    
    /*
     * The document password.
     */
    public $password;
    
    /*
     * The attachment password.
     */
    public $attachmentPassword;
    
    /*
     * When this options is set to true text contained in document will be extracted and returned along with other information.
     */
    public $extractText;
    
    /*
     * Allows to render document comments.
     */
    public $renderComments;
    
    /*
     * Enables document hidden pages, sheets or slides rendering.
     */
    public $renderHiddenPages;
    
    /*
     * The name of the default font.
     */
    public $defaultFontName;
    
    /*
     * The folder with custom fonts in storage.
     */
    public $fontsFolder;
    
    /*
     * The folder which contains specified file in storage.
     */
    public $folder;
    
    /*
     * The file storage which have to be used.
     */
    public $storage;
}
