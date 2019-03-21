#extends('layouts.master')

#block('title', 'The Business Model Canvas')

#block('style')
    
#endblock


#block('content')

<section class="pt-10">
<div class="container">
      <h3 class="m-0">The Business Model Canvas</h3>
      <!-- Canvas -->
      <table id="bizcanvas" cellspacing="0" border="1">
        <!-- Upper part -->
        <tr>
          <td colspan="2" rowspan="2">
            <h4 data-toggle="tooltip" data-replacement="right" title="" data-original-title="Who are your key partners? What are their motives?">Key Partners</h4>
            <p id="keyPartnersArr"><p>
            <p><button type="button" class="btn btn-primary btn-sm" id="keyPartners">Add <i class="fas fa-plus-circle"></i></button></p>
          </td>
          <td colspan="2">
            <h4 data-toggle="tooltip" data-replacement="right" title="" data-original-title="What key activities does the value proposal require? What activities are the most important for distribution channels, customer relations, income sources?">Key Activities</h4>
						<p id="keyActivitiesArr"><p>
            <p><button type="button" class="btn btn-primary btn-sm" id="keyActivities">Add <i class="fas fa-plus-circle"></i></button></p>
          </td>
          <td colspan="2" rowspan="2">
            <h4 data-toggle="tooltip" data-replacement="right" title="" data-original-title="What value do you bring to the customer? What problem do you help solve and what needs do you respond to?">Value Proposition</h4>
            <p id="valuePropositionArr"><p>
            <p><button type="button" class="btn btn-primary btn-sm" id="valueProposition">Add <i class="fas fa-plus-circle"></i></button></p>
          </td>
          <td colspan="2">
            <h4 data-toggle="tooltip" data-replacement="right" title="" data-original-title="What types of relationships do each of your customer segments want to have with you? How do they articulate with the elements of your business model?">Customer Relationship</h4>
            <p id="customerRelationshipArr"><p>
            <p><button type="button" class="btn btn-primary btn-sm" id="customerRelationship">Add <i class="fas fa-plus-circle"></i></button></p>
          </td>
          <td colspan="2" rowspan="2">
            <h4 data-toggle="tooltip" data-replacement="right" title="" data-original-title="Who do you create value for? Who are your most important customers?">Customer Segments</h4>
            <p id="customerSegmentsArr"><p>
            <p><button type="button" class="btn btn-primary btn-sm" id="customerSegments">Add <i class="fas fa-plus-circle"></i></button></p>
          </td>
        </tr>

        <!-- Lower part -->
        <tr>
          <td colspan="2">
            <h4 data-toggle="tooltip" data-replacement="right" title="" data-original-title="What are the resources required by the value proposition? What resources are needed for distribution channels, the relationship with customers,...?">Key Resources</h4>
            <p id="keyResourcesArr"><p>
            <p><button type="button" class="btn btn-primary btn-sm" id="keyResources">Add <i class="fas fa-plus-circle"></i></button></p>
          </td>
          <td colspan="2">
            <h4 data-toggle="tooltip" data-replacement="right" title="" data-original-title="What channels do your customers want to be affected by? Which channels work best? Which ones are the most profitable? Best fit in your routine and that of your customers?">Channels</h4>
            <p id="channelsArr"><p>
            <p><button type="button" class="btn btn-primary btn-sm" id="channels">Add <i class="fas fa-plus-circle"></i></button></p>
          </td>
        </tr>
        <tr>
          <td colspan="5">
            <h4 data-toggle="tooltip" data-replacement="top" title="" data-original-title="What are the most important costs associated with your business? What key resources and/or activities are the most expensive?">Cost Structure</h4>
            <p id="costStructureArr"><p>
            <p><button type="button" class="btn btn-primary btn-sm" id="costStructure">Add <i class="fas fa-plus-circle"></i></button></p>
          </td>
          <td colspan="5">
            <h4 data-toggle="tooltip" data-placement="left" title="" data-original-title="For what benefits are your customers willing to pay? What services/products do they currently pay for and how? What is the contribution of revenue streams to total revenues?">Revenue Streams</h4>
            <p id="revenueStreamsArr"><p>
            <p><button type="button" class="btn btn-primary btn-sm" id="revenueStreams">Add <i class="fas fa-plus-circle"></i></button></p>
          </td>
        </tr>
      </table>
      <!-- /Canvas -->
    </div>
</section>

#endblock

#block('script')

#endblock