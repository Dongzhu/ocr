<?php

namespace Godruoyi\OCR\Clients;

use Godruoyi\OCR\Requests\TencentRequest;
use Godruoyi\OCR\Contracts\Client as ClientInterface;

/**
 * @author    godruoyi godruoyi@gmail.com>
 * @copyright 2017
 *
 * @see https://cloud.tencent.com/document/product/866/33514
 * @see https://github.com/godruoyi/ocr
 *
 * @version 2.0
 *
 * @method array idcard($files, $options = []) 身份证识别
 *
 */
class TencentClient extends Client implements ClientInterface
{
    /**
     * Register request.
     *
     * @param TencentClient $request
     */
    public function __construct(TencentRequest $request)
    {
        $this->request = $request;
    }

    /**
     * 通用印刷体识别
     *
     * @see https://cloud.tencent.com/document/product/866/33526
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function generalBasic($images, array $options = [])
    {
        return $this->request->request('GeneralBasicOCR', $images, $options);
    }

    /**
     * 广告文字识别
     *
     * @see https://cloud.tencent.com/document/product/866/49524
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function advertise($images, array $options = [])
    {
        return $this->request->request('AdvertiseOCR', $images, $options);
    }

    /**
     * 通用印刷体识别（高精度版）
     *
     * @see https://cloud.tencent.com/document/product/866/34937
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function generalAccurate($images, array $options = [])
    {
        return $this->request->request('GeneralAccurateOCR', $images, $options);
    }

    /**
     * 通用印刷体识别（精简版）
     *
     * @see https://cloud.tencent.com/document/product/866/37831
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function generalEfficient($images, array $options = [])
    {
        return $this->request->request('GeneralEfficientOCR', $images, $options);
    }

    /**
     * 通用印刷体识别（高速版）
     *
     * @see https://cloud.tencent.com/document/product/866/33525
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function generalFast($images, array $options = [])
    {
        return $this->request->request('GeneralFastOCR', $images, $options);
    }

    /**
     * 英文识别
     *
     * @see https://cloud.tencent.com/document/product/866/34938
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function english($images, array $options = [])
    {
        return $this->request->request('EnglishOCR', $images, $options);
    }

    /**
     * 通用手写体识别
     *
     * @see https://cloud.tencent.com/document/product/866/36212
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function generalHandwriting($images, array $options = [])
    {
        return $this->request->request('GeneralHandwritingOCR', $images, $options);
    }

    /**
     * 快速文本检测
     *
     * @see https://cloud.tencent.com/document/product/866/37830
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function textDetect($images, array $options = [])
    {
        return $this->request->request('TextDetect', $images, $options);
    }

    //

    /**
     * 身份证识别
     *
     * @see https://cloud.tencent.com/document/product/866/33524
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function idCard($images, array $options = [])
    {
        return $this->request->request('IDCardOCR', $images, $options);
    }

    /**
     * 名片识别
     *
     * @see @see https://cloud.tencent.com/document/product/866/36214
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function businessCard($images, array $options = [])
    {
        return $this->request->request('BusinessCardOCR', $images, $options);
    }

    /**
     * 营业执照识别
     *
     * @see @see https://cloud.tencent.com/document/product/866/36215
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function bizLicense($images, array $options = [])
    {
        return $this->request->request('BizLicenseOCR', $images, $options);
    }

    /**
     * 银行卡识别
     *
     * @see @see https://cloud.tencent.com/document/product/866/36216
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function bankCard($images, array $options = [])
    {
        return $this->request->request('BankCardOCR', $images, $options);
    }

    /**
     * 港澳台通行证识别
     *
     * @see @see https://cloud.tencent.com/document/product/866/37074
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function permit($images, array $options = [])
    {
        return $this->request->request('PermitOCR', $images, $options);
    }

    /**
     * 马来西亚身份证识别
     *
     * @see @see https://cloud.tencent.com/document/product/866/37656
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function mlidCard($images, array $options = [])
    {
        return $this->request->request('MLIDCardOCR', $images, $options);
    }

    /**
     * 护照识别（港澳台地区及境外护照）
     *
     * @see @see https://cloud.tencent.com/document/product/866/37657
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function mlidPassport($images, array $options = [])
    {
        return $this->request->request('MLIDPassportOCR', $images, $options);
    }

    /**
     * 护照识别（中国大陆地区护照）
     *
     * @see @see https://cloud.tencent.com/document/product/866/37840
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function passport($images, array $options = [])
    {
        return $this->request->request('PassportOCR', $images, $options);
    }

    /**
     * 组织机构代码证识别
     *
     * @see @see https://cloud.tencent.com/document/product/866/38298
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function orgCodeCert($images, array $options = [])
    {
        return $this->request->request('OrgCodeCertOCR', $images, $options);
    }

    /**
     * 事业单位法人证书识别
     *
     * @see @see https://cloud.tencent.com/document/product/866/38299
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function institution($images, array $options = [])
    {
        return $this->request->request('InstitutionOCR', $images, $options);
    }

    /**
     * 不动产权证识别
     *
     * @see @see https://cloud.tencent.com/document/product/866/38300
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function estateCert($images, array $options = [])
    {
        return $this->request->request('EstateCertOCR', $images, $options);
    }

    /**
     * 企业证照识别
     *
     * @see @see https://cloud.tencent.com/document/product/866/38849
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function enterpriseLicense($images, array $options = [])
    {
        return $this->request->request('EnterpriseLicenseOCR', $images, $options);
    }

    /**
     * 户口本识别
     *
     * @see @see https://cloud.tencent.com/document/product/866/40036
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function residenceBooklet($images, array $options = [])
    {
        return $this->request->request('ResidenceBookletOCR', $images, $options);
    }

    /**
     * 房产证识别
     *
     * @see @see https://cloud.tencent.com/document/product/866/40037
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function propOwnerCert($images, array $options = [])
    {
        return $this->request->request('PropOwnerCertOCR', $images, $options);
    }

    /**
     * 港澳台来往内地通行证识别
     *
     * @see @see https://cloud.tencent.com/document/product/866/43105
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function mainlandPermit($images, array $options = [])
    {
        return $this->request->request('MainlandPermitOCR', $images, $options);
    }

    /**
     * 港澳台居住证识别
     *
     * @see @see https://cloud.tencent.com/document/product/866/43106
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function hmtResidentPermitOCR($images, array $options = [])
    {
        return $this->request->request('HmtResidentPermitOCR', $images, $options);
    }

    /**
     * 智能卡证分类
     *
     * @see @see https://cloud.tencent.com/document/product/866/46770
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function classifyDetect($images, array $options = [])
    {
        return $this->request->request('ClassifyDetectOCR', $images, $options);
    }

    /**
     * 中国香港身份证识别
     *
     * @see @see https://cloud.tencent.com/document/product/866/46919
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function hkIDCard($images, array $options = [])
    {
        return $this->request->request('HKIDCardOCR', $images, $options);
    }

    /**
     * 泰国身份证识别
     *
     * @see @see https://cloud.tencent.com/document/product/866/48475
     *
     * @param  mixed $images
     * @param  array  $options
     *
     * @return mixed
     */
    public function recognizeThaiIDCard($images, array $options = [])
    {
        return $this->request->request('RecognizeThaiIDCardOCR', $images, $options);
    }

    //

    /**
     * 运单识别
     *
     * @see https://cloud.tencent.com/document/product/866/33524
     *
     * @param  [type] $images  [description]
     * @param  array  $options [description]
     *
     * @return [type]          [description]
     */
    public function aaa($images, array $options = [])
    {
        return $this->request->request('aaa', $images, $options);
    }

    /**
     * 增值税发票识别
     *
     * @see https://cloud.tencent.com/document/product/866/33524
     *
     * @param  [type] $images  [description]
     * @param  array  $options [description]
     *
     * @return [type]          [description]
     */
    public function aaa($images, array $options = [])
    {
        return $this->request->request('aaa', $images, $options);
    }

    /**
     * 火车票识别
     *
     * @see https://cloud.tencent.com/document/product/866/33524
     *
     * @param  [type] $images  [description]
     * @param  array  $options [description]
     *
     * @return [type]          [description]
     */
    public function aaa($images, array $options = [])
    {
        return $this->request->request('aaa', $images, $options);
    }

    /**
     * 出租车发票识别
     *
     * @see https://cloud.tencent.com/document/product/866/33524
     *
     * @param  [type] $images  [description]
     * @param  array  $options [description]
     *
     * @return [type]          [description]
     */
    public function aaa($images, array $options = [])
    {
        return $this->request->request('aaa', $images, $options);
    }

    /**
     * 定额发票识别
     *
     * @see https://cloud.tencent.com/document/product/866/33524
     *
     * @param  [type] $images  [description]
     * @param  array  $options [description]
     *
     * @return [type]          [description]
     */
    public function aaa($images, array $options = [])
    {
        return $this->request->request('aaa', $images, $options);
    }

    /**
     * 机票行程单识别
     *
     * @see https://cloud.tencent.com/document/product/866/33524
     *
     * @param  [type] $images  [description]
     * @param  array  $options [description]
     *
     * @return [type]          [description]
     */
    public function aaa($images, array $options = [])
    {
        return $this->request->request('aaa', $images, $options);
    }

    /**
     * 购车发票识别
     *
     * @see https://cloud.tencent.com/document/product/866/33524
     *
     * @param  [type] $images  [description]
     * @param  array  $options [description]
     *
     * @return [type]          [description]
     */
    public function aaa($images, array $options = [])
    {
        return $this->request->request('aaa', $images, $options);
    }

    /**
     * 增值税发票（卷票）识别
     *
     * @see https://cloud.tencent.com/document/product/866/33524
     *
     * @param  [type] $images  [description]
     * @param  array  $options [description]
     *
     * @return [type]          [description]
     */
    public function aaa($images, array $options = [])
    {
        return $this->request->request('aaa', $images, $options);
    }

    /**
     * 过路过桥费发票识别
     *
     * @see https://cloud.tencent.com/document/product/866/33524
     *
     * @param  [type] $images  [description]
     * @param  array  $options [description]
     *
     * @return [type]          [description]
     */
    public function aaa($images, array $options = [])
    {
        return $this->request->request('aaa', $images, $options);
    }

    /**
     * 轮船票识别
     *
     * @see https://cloud.tencent.com/document/product/866/33524
     *
     * @param  [type] $images  [description]
     * @param  array  $options [description]
     *
     * @return [type]          [description]
     */
    public function aaa($images, array $options = [])
    {
        return $this->request->request('aaa', $images, $options);
    }

    /**
     * 混贴票据识别
     *
     * @see https://cloud.tencent.com/document/product/866/33524
     *
     * @param  [type] $images  [description]
     * @param  array  $options [description]
     *
     * @return [type]          [description]
     */
    public function aaa($images, array $options = [])
    {
        return $this->request->request('aaa', $images, $options);
    }

    /**
     * 混贴票据分类
     *
     * @see https://cloud.tencent.com/document/product/866/33524
     *
     * @param  [type] $images  [description]
     * @param  array  $options [description]
     *
     * @return [type]          [description]
     */
    public function aaa($images, array $options = [])
    {
        return $this->request->request('aaa', $images, $options);
    }

    /**
     * 通用机打发票识别
     *
     * @see https://cloud.tencent.com/document/product/866/33524
     *
     * @param  [type] $images  [description]
     * @param  array  $options [description]
     *
     * @return [type]          [description]
     */
    public function aaa($images, array $options = [])
    {
        return $this->request->request('aaa', $images, $options);
    }

    /**
     * 汽车票识别
     *
     * @see https://cloud.tencent.com/document/product/866/33524
     *
     * @param  [type] $images  [description]
     * @param  array  $options [description]
     *
     * @return [type]          [description]
     */
    public function aaa($images, array $options = [])
    {
        return $this->request->request('aaa', $images, $options);
    }

    /**
     * 完税证明识别
     *
     * @see https://cloud.tencent.com/document/product/866/33524
     *
     * @param  [type] $images  [description]
     * @param  array  $options [description]
     *
     * @return [type]          [description]
     */
    public function aaa($images, array $options = [])
    {
        return $this->request->request('aaa', $images, $options);
    }

    /**
     * 金融票据切片识别
     *
     * @see https://cloud.tencent.com/document/product/866/33524
     *
     * @param  [type] $images  [description]
     * @param  array  $options [description]
     *
     * @return [type]          [description]
     */
    public function aaa($images, array $options = [])
    {
        return $this->request->request('aaa', $images, $options);
    }

    /**
     * 金融票据整单识别
     *
     * @see https://cloud.tencent.com/document/product/866/33524
     *
     * @param  [type] $images  [description]
     * @param  array  $options [description]
     *
     * @return [type]          [description]
     */
    public function aaa($images, array $options = [])
    {
        return $this->request->request('aaa', $images, $options);
    }
}