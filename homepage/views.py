from django.shortcuts import render
from django.http import HttpResponse

def home_page(request):
    return render(request, 'template_home.html')

def about_page(request):
    return render(request, 'template_about.html')
