<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99@c8c9aa8a14cc3d3bec86d0a8c3fa52ea79936855',
  'doctrine/annotations' => '1.12.1@b17c5014ef81d212ac539f07a1001832df1b6d3b',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.1@2afde5a9844126bc311cd5f548b5475e75f800d3',
  'doctrine/dbal' => '2.13.0@67d56d3203b33db29834e6b2fcdbfdc50535d796',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.3.0@8b922578bdee2243a26202b13df795e170efaef8',
  'doctrine/doctrine-migrations-bundle' => '3.0.2@b8de89fe811e62f1dea8cf9aafda0ea45ca6f1f3',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.1.1@e543224170a61ffe49fcadb8e7339c345df1baa2',
  'doctrine/orm' => '2.8.2@ebae57eb9637acd8252b398df3121b120688ed5c',
  'doctrine/persistence' => '2.1.0@9899c16934053880876b920a3b8b02ed2337ac1d',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'dompdf/dompdf' => 'v1.0.2@8768448244967a46d6e67b891d30878e0e15d25c',
  'egulias/email-validator' => '3.1.0@62c3b73c581c834885acf6e120b412b76acc495a',
  'friendsofphp/proxy-manager-lts' => 'v1.0.3@121af47c9aee9c03031bdeca3fac0540f59aa5c3',
  'google/recaptcha' => '1.2.4@614f25a9038be4f3f2da7cbfd778dc5b357d2419',
  'jms/metadata' => '2.5.0@b5c52549807b2d855b3d7e36ec164c00eb547338',
  'knplabs/knp-components' => 'v3.0.2@7db2eb032591ded5809455af8a4dfdfda079041c',
  'knplabs/knp-paginator-bundle' => 'v5.4.2@8a7255062dd9f6ff8a3a4712a4b34bdbbc9f31f7',
  'laminas/laminas-code' => '4.1.0@5b553c274b94af3f880cbaaf8fbab047f279a31c',
  'laminas/laminas-eventmanager' => '3.3.1@966c859b67867b179fde1eff0cd38df51472ce4a',
  'laminas/laminas-zendframework-bridge' => '1.2.0@6cccbddfcfc742eb02158d6137ca5687d92cee32',
  'monolog/monolog' => '1.26.0@2209ddd84e7ef1256b7af205d0717fb62cfc9c33',
  'phenx/php-font-lib' => '0.5.2@ca6ad461f032145fff5971b5985e5af9e7fa88d8',
  'phenx/php-svg-lib' => 'v0.3.3@5fa61b65e612ce1ae15f69b3d223cb14ecc60e32',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sabberworm/php-css-parser' => '8.3.1@d217848e1396ef962fb1997cf3e2421acba7f796',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'swiftmailer/swiftmailer' => 'v6.2.7@15f7faf8508e04471f666633addacf54c0ab5933',
  'symfony/asset' => 'v4.4.20@f2204a526c34945b1614cde033692983b6102eb8',
  'symfony/cache' => 'v4.4.21@b7ff54be3f3eb1ce09643692f0c309b1b27bc992',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v4.4.20@98606c6fa1a8f55ff964ccdd704275bf5b9f71b3',
  'symfony/console' => 'v4.4.21@1ba4560dbbb9fcf5ae28b61f71f49c678086cf23',
  'symfony/debug' => 'v4.4.20@157bbec4fd773bae53c5483c50951a5530a2cc16',
  'symfony/dependency-injection' => 'v4.4.21@b5f97557faa48ead4671bc311cfca423d476e93e',
  'symfony/doctrine-bridge' => 'v4.4.21@e643bddb38277b4a1c2973d1489768c6e6c0db80',
  'symfony/dotenv' => 'v4.4.20@4952e5ce9e6df3d737b9e9c337bddf781180a213',
  'symfony/error-handler' => 'v4.4.21@48e81a375525872e788c2418430f54150d935810',
  'symfony/event-dispatcher' => 'v4.4.20@c352647244bd376bf7d31efbd5401f13f50dad0c',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/expression-language' => 'v4.4.20@a6b2c711e4d4dcba4db7b36a8a1835b0720d07fe',
  'symfony/filesystem' => 'v4.4.21@940826c465be2690c9fae91b2793481e5cbd6834',
  'symfony/finder' => 'v4.4.20@2543795ab1570df588b9bbd31e1a2bd7037b94f6',
  'symfony/flex' => 'v1.12.2@e472606b4b3173564f0edbca8f5d32b52fc4f2c9',
  'symfony/form' => 'v4.4.21@9ced5b787916fb8a64819d63a4bcf7ddda46791c',
  'symfony/framework-bundle' => 'v4.4.21@fc72fbb0f9a69d2eb5d94cc8c231176265db680a',
  'symfony/http-client' => 'v4.4.21@911177e186b82e5b9a9f41c13af53699b6745657',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v4.4.20@02d968647fe61b2f419a8dc70c468a9d30a48d3a',
  'symfony/http-kernel' => 'v4.4.21@0248214120d00c5f44f1cd5d9ad65f0b38459333',
  'symfony/inflector' => 'v4.4.21@9455097d23776a4a10c817d903271bc1ce7596ff',
  'symfony/intl' => 'v4.4.20@fe19cafd0ff661c2143c8717bb1dca0457794c1e',
  'symfony/mailer' => 'v4.4.21@76b64a4105634d89e1f7ee7f75851740fe8fe66b',
  'symfony/mime' => 'v4.4.21@50d7a1d569edad1f1321c59123c4c322c8daff7c',
  'symfony/monolog-bridge' => 'v4.4.21@3741314b95e8d0c11a485dce562898f5f67f455c',
  'symfony/monolog-bundle' => 'v3.6.0@e495f5c7e4e672ffef4357d4a4d85f010802f940',
  'symfony/options-resolver' => 'v4.4.20@cd8c6a2778d5f8b5e8fc4b7abdf126790b5d5095',
  'symfony/polyfill-intl-grapheme' => 'v1.22.1@5601e09b69f26c1828b13b6bb87cb07cddba3170',
  'symfony/polyfill-intl-icu' => 'v1.22.1@af1842919c7e7364aaaa2798b29839e3ba168588',
  'symfony/polyfill-intl-idn' => 'v1.22.1@2d63434d922daf7da8dd863e7907e67ee3031483',
  'symfony/polyfill-intl-normalizer' => 'v1.22.1@43a0283138253ed1d48d352ab6d0bdb3f809f248',
  'symfony/polyfill-mbstring' => 'v1.22.1@5232de97ee3b75b0360528dae24e73db49566ab1',
  'symfony/polyfill-php72' => 'v1.22.1@cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9',
  'symfony/polyfill-php73' => 'v1.22.1@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.1@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/process' => 'v4.4.20@7e950b6366d4da90292c2e7fa820b3c1842b965a',
  'symfony/property-access' => 'v4.4.20@94a1d9837396c71a0d8c31686c16693a15651622',
  'symfony/property-info' => 'v4.4.20@67845c335482cea0dd52497ae1314ce7a4978c74',
  'symfony/proxy-manager-bridge' => 'v4.4.20@811a39770b21f05bea9a737568074be4f02e7733',
  'symfony/routing' => 'v4.4.20@69919991c845b34626664ddc9b3aef9d09d2a5df',
  'symfony/security-bundle' => 'v4.4.21@607dcdb60ef74d63fbeb86549c52075f040ae4cc',
  'symfony/security-core' => 'v4.4.21@19a7caa988be4f013669a057861a1d2a3eacbbf3',
  'symfony/security-csrf' => 'v4.4.20@6864087a9c20eb4bb4063fc2f36954cec0ce28a6',
  'symfony/security-guard' => 'v4.4.20@20f522ada1eefb7c2f90cb83dcc76abb160c782f',
  'symfony/security-http' => 'v4.4.21@c5546b762376e4d9a806b08bf4495b2633573ff8',
  'symfony/serializer' => 'v4.4.20@9fa36329a06282e1fc856b84f645472a410c3922',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v4.4.20@c5572f6494fc20668a73b77684d8dc77e534d8cf',
  'symfony/string' => 'v5.2.6@ad0bd91bce2054103f5eaa18ebeba8d3bc2a0572',
  'symfony/swiftmailer-bundle' => 'v3.5.2@6b72355549f02823a2209180f9c035e46ca3f178',
  'symfony/translation' => 'v4.4.21@eb8f5428cc3b40d6dffe303b195b084f1c5fbd14',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v4.4.21@f5d0492a38c5325d9c322d406dbe95bc26fc530d',
  'symfony/twig-bundle' => 'v4.4.20@7cee73b45e3bd963a0ab4184f1041dcdc85b6e86',
  'symfony/validator' => 'v4.4.21@c00da06b82b8591548f52b4d6aad0faa0985843e',
  'symfony/var-dumper' => 'v4.4.21@0da0e174f728996f5d5072d6a9f0a42259dbc806',
  'symfony/var-exporter' => 'v4.4.20@3a3ea598bba6901d20b58c2579f68700089244ed',
  'symfony/web-link' => 'v4.4.21@565789cb9293a71a92410f50e663b91c0c4c0eac',
  'symfony/web-server-bundle' => 'v4.4.21@a3a7b8044cecd8df158984e05fea122d4f668a9f',
  'symfony/yaml' => 'v4.4.21@3871c720871029f008928244e56cf43497da7e9d',
  'twig/extra-bundle' => 'v3.3.0@e2d27a86c3f47859eb07808fa7c8679d30fcbdde',
  'twig/twig' => 'v3.3.0@1f3b7e2c06cc05d42936a8ad508ff1db7975cdc5',
  'vich/uploader-bundle' => '1.17.0@ac1d4d1d73fa89fe4cb1d00205f01dc7144434ca',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'nikic/php-parser' => 'v4.10.4@c6d052fc58cb876152f89f532b95a8d7907e7f0e',
  'symfony/browser-kit' => 'v4.4.20@cfa8d92f95294747e3abc04969efee51ed374424',
  'symfony/css-selector' => 'v4.4.20@f907d3e53ecb2a5fad8609eb2f30525287a734c8',
  'symfony/debug-bundle' => 'v4.4.20@1e136a4c6d8c2364b77e31c5bf124660cff6d084',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/dom-crawler' => 'v4.4.20@be133557f1b0e6672367325b508e65da5513a311',
  'symfony/maker-bundle' => 'v1.30.2@a395a85aa4ded6c1fa3da118d60329b64b6c2acd',
  'symfony/phpunit-bridge' => 'v5.2.6@f2f94fd78379cdcdef09dd5025af791301913968',
  'symfony/web-profiler-bundle' => 'v4.4.21@bd848a0c0f3e7229e329adeea10e8945f70cb4c9',
  'paragonie/random_compat' => '2.*@fdaa00bed18adcf3665afd5631019b8957908fa0',
  'symfony/polyfill-ctype' => '*@fdaa00bed18adcf3665afd5631019b8957908fa0',
  'symfony/polyfill-iconv' => '*@fdaa00bed18adcf3665afd5631019b8957908fa0',
  'symfony/polyfill-php71' => '*@fdaa00bed18adcf3665afd5631019b8957908fa0',
  'symfony/polyfill-php70' => '*@fdaa00bed18adcf3665afd5631019b8957908fa0',
  'symfony/polyfill-php56' => '*@fdaa00bed18adcf3665afd5631019b8957908fa0',
  '__root__' => 'dev-main@fdaa00bed18adcf3665afd5631019b8957908fa0',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
