<?php

/**
 * Template Name: Location
 * Template Post Type: page
 *
 */
get_header();

$id = get_the_ID();
$title = get_the_title($id);
$content = get_the_content($id);

$featured_image = get_the_post_thumbnail($id, 'full', array('class' => 'w-full h-full object-cover'));
$featured_image = '<img class="w-full h-full object-cover" src="' . get_stylesheet_directory_uri() . '/assets/images/demo/pages/location-hero.jpg">';
?>
<section>
  <div class="h-[400px] relative">
    <?php echo $featured_image ?>
    <div class="absolute w-full bottom-0">
      <div class="container mx-auto flex">
        <div class="w-11/12 lg:w-1/2 bg-primary p-6 -ml-6 lg:p-8 lg:-ml-8 rounded-tr-xl lg:rounded-t-3xl">
          <h1 class="text-white text-3xl lg:text-5xl font-bold"><?php echo $title ?></h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container mx-auto py-12 xl:py-24">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-8">

      <div class="text-sm border border-solid border-slate-300 p-4 rounded-md lg:p-6">
        <h4 class="text-primary uppercase font-bold text-lg mb-4 border-b border-solid border-slate-300 pb-3">Tangerang</h4>
        <div class="flex flex-col gap-2">
          <div class="flex space-x-3">
            <div class="flex-none w-4">
              <?php echo dps_icon(array('icon' => 'map-pin', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
            </div>
            <div>
              <span class="uppercase"><strong>PT. DASA PRAKARSA SEJATI</strong></span><br>
              Jl. Baetussa’adah No.2<br />
              Kadu Wetan, Curug Bitung<br />
              Tangerang, 15810<br />
              <a class="text-primary underline" href="https://maps.app.goo.gl/j2z74S1AaoZDwKGP8" target="_blank">Google Map</a>
            </div>
          </div>
          <div class="flex space-x-3">
            <div class="flex-none w-4">
              <?php echo dps_icon(array('icon' => 'mail', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
            </div>
            <div>
              <a class="hover:text-primary hover:underline" href="mailto:sales@dps-interdesign.com" target="_blank">sales@dps-interdesign.com</a>
            </div>
          </div>
          <div class="flex space-x-3">
            <div class="flex-none w-4">
              <?php echo dps_icon(array('icon' => 'whatsapp', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
            </div>
            <div>
              <a class="hover:text-primary hover:underline" href="https://wa.me/6281513703027" target="_blank">+62 815 1370 3027</a><br />
              <a class="hover:text-primary hover:underline" href="https://wa.me/6281513703012" target="_blank">+62 815 1370 3012</a>
            </div>
          </div>
          <div class="flex space-x-3">
            <div class="flex-none w-4">
              <?php echo dps_icon(array('icon' => 'phone', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
            </div>
            <div>
              <a class="hover:text-primary hover:underline" href="tel:+622155653468" target="_blank">(021) 55653468</a>
            </div>
          </div>
          <div class="flex space-x-3">
            <div class="flex-none w-4">
              <?php echo dps_icon(array('icon' => 'fax', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
            </div>
            <div>
              <a class="hover:text-primary hover:underline" href="tel:+622155656099" target="_blank">(021) 55656099</a>
            </div>
          </div>
        </div>
      </div>

      <div class="text-sm border border-solid border-slate-300 p-4 rounded-md lg:p-6">
        <h4 class="text-primary uppercase font-bold text-lg mb-4 border-b border-solid border-slate-300 pb-3">Bekasi</h4>
        <div class="flex flex-col gap-2">
          <div class="flex space-x-3">
            <div class="flex-none w-4">
              <?php echo dps_icon(array('icon' => 'map-pin', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
            </div>
            <div>
              <span class="uppercase"><strong>PT. SURYA MITRA SUKSES</strong></span><br>
              Jl. Kaliabang Nangka No.3<br />
              Harapan Jaya<br />
              Bekasi Utara, 17124<br />
              <a class="text-primary underline" href="https://maps.app.goo.gl/kcRfU9oiJdQc4hxV7?g_st=iw" target="_blank">Google Map</a>
            </div>
          </div>
          <div class="flex space-x-3">
            <div class="flex-none w-4">
              <?php echo dps_icon(array('icon' => 'mail', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
            </div>
            <div>
              <a class="hover:text-primary hover:underline" href="mailto:sms.bekasi1@gmail.com" target="_blank">sms.bekasi1@gmail.com</a>
            </div>
          </div>
          <div class="flex space-x-3">
            <div class="flex-none w-4">
              <?php echo dps_icon(array('icon' => 'whatsapp', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
            </div>
            <div>
              <a class="hover:text-primary hover:underline" href="https://wa.me/6281513702877" target="_blank">+62 815 1370 2877</a>
            </div>
          </div>
          <div class="flex space-x-3">
            <div class="flex-none w-4">
              <?php echo dps_icon(array('icon' => 'phone', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
            </div>
            <div>
              <a class="hover:text-primary hover:underline" href="tel:+622188989703" target="_blank">(021) 88989703</a><br />
              <a class="hover:text-primary hover:underline" href="tel:+622188383103" target="_blank">(021) 88383103</a>
            </div>
          </div>
          <div class="flex space-x-3">
            <div class="flex-none w-4">
              <?php echo dps_icon(array('icon' => 'fax', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
            </div>
            <div>
              <a class="hover:text-primary hover:underline" href="tel:+622188989702" target="_blank">(021) 88989702</a>
            </div>
          </div>
        </div>

      </div>

      <div class="text-sm border border-solid border-slate-300 p-4 rounded-md lg:p-6">
        <h4 class="text-primary uppercase font-bold text-lg mb-4 border-b border-solid border-slate-300 pb-3">Medan</h4>
        <div class="flex flex-col gap-2">
          <div class="flex space-x-3">
            <div class="flex-none w-4">
              <?php echo dps_icon(array('icon' => 'map-pin', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
            </div>
            <div>
              <span class="uppercase"><strong>PT. SURYA MITRA SUKSES</strong></span><br>
              Kompleks Pergudangan Amplas Trade Center,<br />
              Blok D No. 18-19. Jl. Sisingamangaraja KM. 10<br />
              Medan, 20371<br />
              <a class="text-primary underline" href="https://maps.app.goo.gl/s2CoDJk2mVjKvMLr8?g_st=iw" target="_blank">Google Map</a>
            </div>
          </div>
          <div class="flex space-x-3">
            <div class="flex-none w-4">
              <?php echo dps_icon(array('icon' => 'mail', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
            </div>
            <div>
              <a class="hover:text-primary hover:underline" href="mailto:sms.medan2015@gmail.com" target="_blank">sms.medan2015@gmail.com</a>
            </div>
          </div>
          <div class="flex space-x-3">
            <div class="flex-none w-4">
              <?php echo dps_icon(array('icon' => 'whatsapp', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
            </div>
            <div>
              <a class="hover:text-primary hover:underline" href="https://wa.me/6285361707878" target="_blank">+62 853 6170 7878</a>
            </div>
          </div>
          <div class="flex space-x-3">
            <div class="flex-none w-4">
              <?php echo dps_icon(array('icon' => 'phone', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
            </div>
            <div>
              <a class="hover:text-primary hover:underline" href="tel:+627617433467" target="_blank">(061) 42850058</a>
            </div>
          </div>
          <div class="flex space-x-3">
            <div class="flex-none w-4">
              <?php echo dps_icon(array('icon' => 'fax', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
            </div>
            <div>
              <a class="hover:text-primary hover:underline" href="tel:+627617433467" target="_blank">(061) 42850058</a>
            </div>
          </div>
        </div>
      </div>

      <div class="text-sm border border-solid border-slate-300 p-4 rounded-md lg:p-6 md:col-span-2">
        <h4 class="text-primary uppercase font-bold text-lg mb-4 border-b border-solid border-slate-300 pb-3">Surabaya</h4>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-12">
          <div class="flex flex-col gap-2">
            <div class="flex space-x-3">
              <div class="flex-none w-4">
                <?php echo dps_icon(array('icon' => 'map-pin', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
              </div>
              <div>
                <span class="uppercase"><strong>PT. DASA PRAKARSA SEJATI</strong></span><br>
                Kompleks Pergudangan Margomulyo Permai Blok L No.1<br />
                Surabaya, 60184<br />
                <a class="text-primary underline" href="https://maps.app.goo.gl/18N122RanYjPEtbX8" target="_blank">Google Map</a>
              </div>
            </div>
            <div class="flex space-x-3">
              <div class="flex-none w-4">
                <?php echo dps_icon(array('icon' => 'whatsapp', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
              </div>
              <div>
                <a class="hover:text-primary hover:underline" href="https://wa.me/6281513703193" target="_blank">+62 815 1370 3193</a>
              </div>
            </div>
            <div class="flex space-x-3">
              <div class="flex-none w-4">
                <?php echo dps_icon(array('icon' => 'phone', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
              </div>
              <div>
                <a class="hover:text-primary hover:underline" href="tel:+622151908575" target="_blank">(021) 51908575</a>
              </div>
            </div>
          </div>
          <div class="flex flex-col gap-2">
            <div class="flex space-x-3">
              <div class="flex-none w-4">
                <?php echo dps_icon(array('icon' => 'map-pin', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
              </div>
              <div>
                <span class="uppercase"><strong>PT. SURYA MITRA SUKSES</strong></span><br>
                Jl. Raya Darmo Permai I No. 5<br />
                Surabaya, 60226<br />
                <a class="text-primary underline" href="https://maps.app.goo.gl/3uQRv1Y8YQMjfnJF6?g_st=iw" target="_blank">Google Map</a>
              </div>
            </div>
            <div class="flex space-x-3">
              <div class="flex-none w-4">
                <?php echo dps_icon(array('icon' => 'whatsapp', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
              </div>
              <div>
                <a class="hover:text-primary hover:underline" href="https://wa.me/6281513703094" target="_blank">+62 815 1370 3094</a>
              </div>
            </div>
            <div class="flex space-x-3">
              <div class="flex-none w-4">
                <?php echo dps_icon(array('icon' => 'phone', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
              </div>
              <div>
                <a class="hover:text-primary hover:underline" href="tel:+62317346233" target="_blank">(031) 7346233</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="text-sm border border-solid border-slate-300 p-4 rounded-md lg:p-6">
        <h4 class="text-primary uppercase font-bold text-lg mb-4 border-b border-solid border-slate-300 pb-3">Batam</h4>
        <div class="flex flex-col gap-2">
          <div class="flex space-x-3">
            <div class="flex-none w-4">
              <?php echo dps_icon(array('icon' => 'map-pin', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
            </div>
            <div>
              <span class="uppercase"><strong>PT. DUTA PRAKARSA SEMPURNA</strong></span><br>
              Kompleks Puri Industrial Park 2000<br />
              Blok B No. 7. Batam Center, Kel. Baloi Permai<br />
              Batam, 29431<br />
              <a class="text-primary underline" href="https://maps.app.goo.gl/3C3yZsVaHRPcQBgE6" target="_blank">Google Map</a>
            </div>
          </div>
          <div class="flex space-x-3">
            <div class="flex-none w-4">
              <?php echo dps_icon(array('icon' => 'whatsapp', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
            </div>
            <div>
              <a class="hover:text-primary hover:underline" href="https://wa.me/628117711191" target="_blank">+62 811 7711 191</a>
            </div>
          </div>
          <div class="flex space-x-3">
            <div class="flex-none w-4">
              <?php echo dps_icon(array('icon' => 'phone', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
            </div>
            <div>
              <a class="hover:text-primary hover:underline" href="tel:+627784805688" target="_blank">(0778) 7057189</a>
            </div>
          </div>
        </div>
      </div>

      <div class="text-sm border border-solid border-slate-300 p-4 rounded-md lg:p-6 md:col-span-2">
        <h4 class="text-primary uppercase font-bold text-lg mb-4 border-b border-solid border-slate-300 pb-3">Pekanbaru</h4>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-12">
          <div class="flex flex-col gap-2">
            <div class="flex space-x-3">
              <div class="flex-none w-4">
                <?php echo dps_icon(array('icon' => 'map-pin', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
              </div>
              <div>
                <span class="uppercase"><strong>PT. DASA PRAKARSA SEJATI</strong></span><br>
                Kompleks Pergudangan Angkasa I Blok A-12,<br />
                Jl. SM Amin (Arengka II), Tampan,<br />
                Pekanbaru, 28293<br />
                <a class="text-primary underline" href="https://maps.app.goo.gl/FTEiRFm7kaBsVQis8" target="_blank">Google Map</a>
              </div>
            </div>
            <div class="flex space-x-3">
              <div class="flex-none w-4">
                <?php echo dps_icon(array('icon' => 'whatsapp', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
              </div>
              <div>
                <a class="hover:text-primary hover:underline" href="https://wa.me/6281513702976" target="_blank">+62 815 1370 2976</a>
              </div>
            </div>
            <div class="flex space-x-3">
              <div class="flex-none w-4">
                <?php echo dps_icon(array('icon' => 'phone', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
              </div>
              <div>
                <a class="hover:text-primary hover:underline" href="tel:+627617875888" target="_blank">(0761) 7875888</a>
              </div>
            </div>
          </div>
          <div class="flex flex-col gap-2">
            <div class="flex space-x-3">
              <div class="flex-none w-4">
                <?php echo dps_icon(array('icon' => 'map-pin', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
              </div>
              <div>
                <span class="uppercase"><strong>PT. SURYA MITRA SUKSES</strong></span><br>
                Kompleks Pergudangan Angkasa I Blok B-5<br />
                Jl. SM Amin (Arengka II), Tampan,<br />
                Pekanbaru, 28293<br />
                <a class="text-primary underline" href="https://maps.app.goo.gl/jdT299mEqj6EJP2U9" target="_blank">Google Map</a>
              </div>
            </div>
            <div class="flex space-x-3">
              <div class="flex-none w-4">
                <?php echo dps_icon(array('icon' => 'whatsapp', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
              </div>
              <div>
                <a class="hover:text-primary hover:underline" href="https://wa.me/6282387749118" target="_blank">+62 823 8774 9118</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<?php
get_footer();
