from django.conf.urls import patterns, include, url

urlpatterns = patterns('',
    # Examples:
    url(r'^$', 'd3.views.d3_home_page', name='d3_home'),
    url(r'^chapter_05/', 'd3.views.d3_chapter_05_page', name='d3_chapter_05'),
    # url(r'^blog/', include('blog.urls')),
    #url(r'^admin/', include(admin.site.urls)),
)
