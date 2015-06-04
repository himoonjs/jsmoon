from django.shortcuts import render

def d3_home_page(request):
    return render(request, 'd3/d3_home.html')

def d3_chapter_05_page(request):
    return render(request, 'd3/d3_chapter_05.html')