<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="HtmlGetZipWithPagesRequest.php">
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
 * Request model for htmlGetZipWithPages" operation.
 */
class HtmlGetZipWithPagesRequest
{
    /*
     * Initializes a new instance of the HtmlGetZipWithPagesRequest class.
     *
     * @param string $fileName The file name.
     * @param string $resourcePath The HTML resource path.
     * @param bool $ignoreResourcePathInResources When this option enabled ResourcePath won't be added to resource reference in *.css and *.svg files.
     * @param bool $embedResources Whether to embed HTML resources or save them separate.
     * @param bool $enableMinification Enables content (HTML and SVG) minification.
     * @param bool $enableResponsiveRendering Indicates whether rendering will provide responsive web pages, that look well on different device types.
     * @param int $startPageNumber The starting document page number to render.
     * @param int $countPages The count of document pages to render.
     * @param string $password The document password.
     * @param bool $renderComments Allows to render document comments.
     * @param bool $renderHiddenPages Enables document hidden pages, sheets or slides rendering.
     * @param string $defaultFontName The name of the default font.
     * @param string $fontsFolder The folder with custom fonts in storage.
     * @param string $folder The folder which contains specified file in storage.
     * @param string $storage The file storage which have to be used.
     */
    public function __construct($fileName, $resourcePath = null, $ignoreResourcePathInResources = null, $embedResources = null, $enableMinification = null, $enableResponsiveRendering = null, $startPageNumber = null, $countPages = null, $password = null, $renderComments = null, $renderHiddenPages = null, $defaultFontName = null, $fontsFolder = null, $folder = null, $storage = null)
    {
        $this->fileName = $fileName;
        $this->resourcePath = $resourcePath;
        $this->ignoreResourcePathInResources = $ignoreResourcePathInResources;
        $this->embedResources = $embedResources;
        $this->enableMinification = $enableMinification;
        $this->enableResponsiveRendering = $enableResponsiveRendering;
        $this->startPageNumber = $startPageNumber;
        $this->countPages = $countPages;
        $this->password = $password;
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
     * The HTML resource path.
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
     * The starting document page number to render.
     */
    public $startPageNumber;
    
    /*
     * The count of document pages to render.
     */
    public $countPages;
    
    /*
     * The document password.
     */
    public $password;
    
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
