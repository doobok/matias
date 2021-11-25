<?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">


<url>
  <loc>{{route('mainpage')}}</loc>
  <lastmod>{{ $mainpage_date->tz('GMT')->toAtomString() }}</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>{{route('mappage')}}</loc>
  <lastmod>{{ $mainpage_date->tz('GMT')->toAtomString() }}</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>{{route('contacts')}}</loc>
  <lastmod>{{ $mainpage_date->tz('GMT')->toAtomString() }}</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>{{route('portfolio')}}</loc>
  <lastmod>{{ $mainpage_date->tz('GMT')->toAtomString() }}</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>{{route('partners')}}</loc>
  <lastmod>{{ $mainpage_date->tz('GMT')->toAtomString() }}</lastmod>
  <priority>1.00</priority>
</url>

{{-- pages--}}
@foreach ($pages as $page)
    <url>
      <loc>{{route('page', $page->slug )}}</loc>
      <lastmod>{{ $page->updated_at->tz('GMT')->toAtomString() }}</lastmod>
      <priority>0.90</priority>
    </url>
@endforeach
{{-- proects--}}
@foreach ($projects as $project)
    <url>
      <loc>{{route('project', $project->slug )}}</loc>
      <lastmod>{{ $project->updated_at->tz('GMT')->toAtomString() }}</lastmod>
      <priority>0.70</priority>
    </url>
@endforeach



</urlset>
