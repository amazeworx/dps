<footer id="colophon" class="site-footer bg-primary text-white" role="contentinfo">
  <div class="container mx-auto pt-12 pb-6 flex flex-wrap lg:flex-nowrap">
    <div class="w-full lg:w-5/12">
      <h4 class="text-xl text-left font-bold flex flex-col lg:flex-row lg:items-center lg:space-x-2 text-white">
        <span class="inline-block mb-2 lg:mb-0">DPS Group Member of</span>
        <div class="inline-flex gap-2">
          <span class="inline-block"><?php echo dps_icon(array('icon' => 'logo-interdesign', 'group' => 'custom', 'size' => false, 'class' => 'h-6 w-full')); ?></span>
          <span class="inline-block">Group</span>
        </div>
      </h4>
      <div class="mt-6 mb-8 text-white text-base lg:text-lg lg:mb-0">
        PT. DASA PRAKARSA SEJATI<br />
        PT. DUTA PRAKARSA SEMPURNA<br />
        PT. SURYA MITRA SUKSES
      </div>
    </div>
    <div class="w-full lg:w-7/12">
      <h4 class="text-lg font-bold mb-4">OFFICE & WAREHOUSE</h4>
      <div class="flex flex-wrap gap-4 lg:space-x-8 lg:flex-nowrap">
        <div class="w-full lg:w-1/2 flex space-x-3">
          <div>
            <?php echo dps_icon(array('icon' => 'map-pin', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
          </div>
          <div>
            Jl. Baetussa’adah No.2<br />
            Kadu Wetan, Curug Bitung<br />
            Tangerang, 15810<br />
            <a class="text-white underline" href="https://maps.app.goo.gl/j2z74S1AaoZDwKGP8" target="_blank">Google Map</a>
          </div>
        </div>
        <div class="w-full lg:w-1/2 flex flex-col gap-4">
          <div class="flex space-x-2">
            <div>
              <?php echo dps_icon(array('icon' => 'mail', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
            </div>
            <div>
              sales@dps-interdesign.com
            </div>
          </div>
          <div class="flex space-x-2">
            <div>
              <?php echo dps_icon(array('icon' => 'phone', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
            </div>
            <div>
              <a class="text-white hover:underline" href="tel:+622155653468" target="_blank">(021) 55653468</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php do_action('dps_footer'); ?>

  <div class="container mx-auto text-left text-white py-6">
    &copy; <?php echo date_i18n('Y'); ?> - DPS Group. All rights reserved.
  </div>
</footer>