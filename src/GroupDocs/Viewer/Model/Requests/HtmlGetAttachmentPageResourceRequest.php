<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="HtmlGetAttachmentPageResourceRequest.php">
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
 * Request model for htmlGetAttachmentPageResource" operation.
 */
class HtmlGetAttachmentPageResourceRequest
{
    /*
     * Initializes a new instance of the HtmlGetAttachmentPageResourceRequest class.
     *
     * @param string $fileName The file name.
     * @param string $attachmentName The attachment name.
     * @param int $pageNumber The page number.
     * @param string $resourceName Name of the resource.
     * @param string $folder The folder which contains specified file in storage.
     * @param string $storage The file storage which have to be used.
     */
    public function __construct($fileName, $attachmentName, $pageNumber, $resourceName, $folder = null, $storage = null)
    {
        $this->fileName = $fileName;
        $this->attachmentName = $attachmentName;
        $this->pageNumber = $pageNumber;
        $this->resourceName = $resourceName;
        $this->folder = $folder;
        $this->storage = $storage;
    }

    /*
     * The file name.
     */
    public $fileName;
    
    /*
     * The attachment name.
     */
    public $attachmentName;
    
    /*
     * The page number.
     */
    public $pageNumber;
    
    /*
     * Name of the resource.
     */
    public $resourceName;
    
    /*
     * The folder which contains specified file in storage.
     */
    public $folder;
    
    /*
     * The file storage which have to be used.
     */
    public $storage;
}
