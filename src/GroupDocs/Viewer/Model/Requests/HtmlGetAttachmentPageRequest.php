<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="HtmlGetAttachmentPageRequest.php">
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
 * Request model for htmlGetAttachmentPage" operation.
 */
class HtmlGetAttachmentPageRequest
{
    /*
     * Initializes a new instance of the HtmlGetAttachmentPageRequest class.
     *
     * @param string $fileName The document name.
     * @param string $attachmentName Name of the attachment.
     * @param int $pageNumber The attachment page number.
     * @param string $resourcePath The attachment page HTML resource path.
     * @param bool $ignoreResourcePathInResources When this option enabled ResourcePath won't be added to resource reference in *.css and *.svg files.
     * @param bool $embedResources Whether to embed HTML resources or save them separate.
     * @param bool $enableMinification Enables content (HTML and SVG) minification.
     * @param bool $enableResponsiveRendering Indicates whether rendering will provide responsive web pages, that look well on different device types.
     * @param bool $renderComments Allows to render document comments.
     * @param bool $renderHiddenPages Enables document hidden pages, sheets or slides rendering.
     * @param string $password The document password.
     * @param string $attachmentPassword The attachment password.
     * @param string $defaultFontName The name of the default font.
     * @param string $fontsFolder The folder with custom fonts in storage.
     * @param string $folder The folder which contains specified file in storage.
     * @param string $storage The file storage which have to be used.
     */
    public function __construct($fileName, $attachmentName, $pageNumber, $resourcePath = null, $ignoreResourcePathInResources = null, $embedResources = null, $enableMinification = null, $enableResponsiveRendering = null, $renderComments = null, $renderHiddenPages = null, $password = null, $attachmentPassword = null, $defaultFontName = null, $fontsFolder = null, $folder = null, $storage = null)
    {
        $this->fileName = $fileName;
        $this->attachmentName = $attachmentName;
        $this->pageNumber = $pageNumber;
        $this->resourcePath = $resourcePath;
        $this->ignoreResourcePathInResources = $ignoreResourcePathInResources;
        $this->embedResources = $embedResources;
        $this->enableMinification = $enableMinification;
        $this->enableResponsiveRendering = $enableResponsiveRendering;
        $this->renderComments = $renderComments;
        $this->renderHiddenPages = $renderHiddenPages;
        $this->password = $password;
        $this->attachmentPassword = $attachmentPassword;
        $this->defaultFontName = $defaultFontName;
        $this->fontsFolder = $fontsFolder;
        $this->folder = $folder;
        $this->storage = $storage;
    }

    /*
     * The document name.
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
     * The attachment page HTML resource path.
     */
    public $resourcePath;
    
    /*
     * When this option enabled ResourcePath won't be added to resource reference in *.css and *.svg files.
     */
    public $ignoreResourcePathInResources;
    
    /*
     * Whether to embed HTML resources or save them separate.
     */
    public $embedResources;
    
    /*
     * Enables content (HTML and SVG) minification.
     */
    public $enableMinification;
    
    /*
     * Indicates whether rendering will provide responsive web pages, that look well on different device types.
     */
    public $enableResponsiveRendering;
    
    /*
     * Allows to render document comments.
     */
    public $renderComments;
    
    /*
     * Enables document hidden pages, sheets or slides rendering.
     */
    public $renderHiddenPages;
    
    /*
     * The document password.
     */
    public $password;
    
    /*
     * The attachment password.
     */
    public $attachmentPassword;
    
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
