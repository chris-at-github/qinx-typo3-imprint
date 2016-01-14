<?php
namespace Qinx\Qximprint\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Christian Pschorr <pschorr.christian@gmail.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Data
 */
class Data extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * company
     * 
     * @var string
     */
    protected $company = '';
    
    /**
     * address
     * 
     * @var string
     */
    protected $address = '';
    
    /**
     * zip
     * 
     * @var string
     */
    protected $zip = '';
    
    /**
     * city
     * 
     * @var string
     */
    protected $city = '';
    
    /**
     * phone
     * 
     * @var string
     */
    protected $phone = '';
    
    /**
     * fax
     * 
     * @var string
     */
    protected $fax = '';
    
    /**
     * email
     * 
     * @var string
     */
    protected $email = '';
    
    /**
     * url
     * 
     * @var string
     */
    protected $url = '';
    
    /**
     * logo
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $logo = null;
    
    /**
     * Returns the company
     * 
     * @return string $company
     */
    public function getCompany()
    {
        return $this->company;
    }
    
    /**
     * Sets the company
     * 
     * @param string $company
     * @return void
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }
    
    /**
     * Returns the address
     * 
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }
    
    /**
     * Sets the address
     * 
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }
    
    /**
     * Returns the zip
     * 
     * @return string $zip
     */
    public function getZip()
    {
        return $this->zip;
    }
    
    /**
     * Sets the zip
     * 
     * @param string $zip
     * @return void
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }
    
    /**
     * Returns the city
     * 
     * @return string $city
     */
    public function getCity()
    {
        return $this->city;
    }
    
    /**
     * Sets the city
     * 
     * @param string $city
     * @return void
     */
    public function setCity($city)
    {
        $this->city = $city;
    }
    
    /**
     * Returns the phone
     * 
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }
    
    /**
     * Sets the phone
     * 
     * @param string $phone
     * @return void
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    
    /**
     * Returns the fax
     * 
     * @return string $fax
     */
    public function getFax()
    {
        return $this->fax;
    }
    
    /**
     * Sets the fax
     * 
     * @param string $fax
     * @return void
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }
    
    /**
     * Returns the email
     * 
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Sets the email
     * 
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
     * Returns the url
     * 
     * @return string $url
     */
    public function getUrl()
    {
        return $this->url;
    }
    
    /**
     * Sets the url
     * 
     * @param string $url
     * @return void
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
    
    /**
     * Returns the logo
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     */
    public function getLogo()
    {
        return $this->logo;
    }
    
    /**
     * Sets the logo
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     * @return void
     */
    public function setLogo(\TYPO3\CMS\Extbase\Domain\Model\FileReference $logo)
    {
        $this->logo = $logo;
    }

}