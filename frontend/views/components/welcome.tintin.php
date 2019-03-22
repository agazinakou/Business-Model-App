#extends('layouts.master')

#block('title', 'The Business Model Canvas')

#block('style')
    
#endblock


#block('content')

<section class="pt-10">
<div class="container">
      <h3 class="m-0">{{ t('app.home.title') }}</h3>
      <!-- Canvas -->
      <table id="bizcanvas" cellspacing="0" border="1">
        <!-- Upper part -->
        <tr>
          <td colspan="2" rowspan="2">
            <h4 data-toggle="tooltip" data-replacement="right" title="" data-original-title="{{ t('app.canvas.element1_tooltip') }}">{{ t('app.canvas.element1') }}</h4>
            <p id="keyPartnersArr"><p>
            <p><button type="button" class="btn btn-primary btn-sm" id="keyPartners">{{ t('app.canvas.add') }} <i class="fas fa-plus-circle"></i></button></p>
          </td>
          <td colspan="2">
            <h4 data-toggle="tooltip" data-replacement="right" title="" data-original-title="{{ t('app.canvas.element1_tooltip') }}">{{ t('app.canvas.element2') }}</h4>
						<p id="keyActivitiesArr"><p>
            <p><button type="button" class="btn btn-primary btn-sm" id="keyActivities">{{ t('app.canvas.add') }} <i class="fas fa-plus-circle"></i></button></p>
          </td>
          <td colspan="2" rowspan="2">
            <h4 data-toggle="tooltip" data-replacement="right" title="" data-original-title="{{ t('app.canvas.element3_tooltip') }}">{{ t('app.canvas.element3') }}</h4>
            <p id="valuePropositionArr"><p>
            <p><button type="button" class="btn btn-primary btn-sm" id="valueProposition">{{ t('app.canvas.add') }} <i class="fas fa-plus-circle"></i></button></p>
          </td>
          <td colspan="2">
            <h4 data-toggle="tooltip" data-replacement="right" title="" data-original-title="{{ t('app.canvas.element4_tooltip') }}">{{ t('app.canvas.element4') }}</h4>
            <p id="customerRelationshipArr"><p>
            <p><button type="button" class="btn btn-primary btn-sm" id="customerRelationship">{{ t('app.canvas.add') }} <i class="fas fa-plus-circle"></i></button></p>
          </td>
          <td colspan="2" rowspan="2">
            <h4 data-toggle="tooltip" data-replacement="right" title="" data-original-title="{{ t('app.canvas.element5_tooltip') }}">{{ t('app.canvas.element5') }}</h4>
            <p id="customerSegmentsArr"><p>
            <p><button type="button" class="btn btn-primary btn-sm" id="customerSegments">{{ t('app.canvas.add') }} <i class="fas fa-plus-circle"></i></button></p>
          </td>
        </tr>

        <!-- Lower part -->
        <tr>
          <td colspan="2">
            <h4 data-toggle="tooltip" data-replacement="right" title="" data-original-title="{{ t('app.canvas.element6_tooltip') }}">{{ t('app.canvas.element6') }}</h4>
            <p id="keyResourcesArr"><p>
            <p><button type="button" class="btn btn-primary btn-sm" id="keyResources">{{ t('app.canvas.add') }} <i class="fas fa-plus-circle"></i></button></p>
          </td>
          <td colspan="2">
            <h4 data-toggle="tooltip" data-replacement="right" title="" data-original-title="{{ t('app.canvas.element7_tooltip') }}">{{ t('app.canvas.element7') }}</h4>
            <p id="channelsArr"><p>
            <p><button type="button" class="btn btn-primary btn-sm" id="channels">{{ t('app.canvas.add') }} <i class="fas fa-plus-circle"></i></button></p>
          </td>
        </tr>
        <tr>
          <td colspan="5">
            <h4 data-toggle="tooltip" data-replacement="top" title="" data-original-title="{{ t('app.canvas.element8_tooltip') }}">{{ t('app.canvas.element8') }}</h4>
            <p id="costStructureArr"><p>
            <p><button type="button" class="btn btn-primary btn-sm" id="costStructure">{{ t('app.canvas.add') }} <i class="fas fa-plus-circle"></i></button></p>
          </td>
          <td colspan="5">
            <h4 data-toggle="tooltip" data-placement="left" title="" data-original-title="{{ t('app.canvas.element9_tooltip') }}">{{ t('app.canvas.element9') }}</h4>
            <p id="revenueStreamsArr"><p>
            <p><button type="button" class="btn btn-primary btn-sm" id="revenueStreams">{{ t('app.canvas.add') }} <i class="fas fa-plus-circle"></i></button></p>
          </td>
        </tr>
      </table>
      <!-- /Canvas -->
    </div>
</section>

#endblock

#block('script')

#endblock
