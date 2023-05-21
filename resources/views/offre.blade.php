@extends('layouts.template')

@section('title', 'Description de l\'offre')
    

@section('content')

<h3 class="text-center">@yield('title')</h3>
    
<div class="job-description">
    <h2 class="job-title">Titre de l'emploi: [Titre du poste]</h2>
    <h3 class="job-location">Lieu de travail: [Ville ou région]</h3>
    <h3 class="job-type">Type d'emploi: [Temps plein/temps partiel/contrat]</h3>
    
    <div class="job-details">
      <h4 class="job-details__title">Description de l'emploi:</h4>
      <p class="job-details__description">[Description de l'entreprise et de son activité]</p>
      
      <h4 class="job-details__title">Responsabilités:</h4>
      <ul class="job-details__list">
        <li>[Résumé des principales responsabilités du poste]</li>
      </ul>
      
      <h4 class="job-details__title">Exigences du poste:</h4>
      <ul class="job-details__list">
        <li>[Énumérer les exigences essentielles, telles que les diplômes, les certifications, l'expérience professionnelle, les compétences techniques, etc.]</li>
        <li>[Ajouter les compétences ou les qualités personnelles souhaitées, telles que la capacité de travailler en équipe, l'adaptabilité, l'initiative, etc.]</li>
      </ul>
      
      <h4 class="job-details__title">Nous offrons:</h4>
      <ul class="job-details__list">
        <li>[Lister les avantages du poste, tels que les avantages sociaux, les horaires flexibles, les possibilités de formation, etc.]</li>
        <li>[Mentionner la rémunération proposée, s'il y a lieu.]</li>
      </ul>
      
      <p class="job-details__contact">Si vous êtes intéressé(e) par ce poste, veuillez envoyer votre CV et votre lettre de motivation à [Adresse de contact]. Nous remercions tous les candidats pour leur intérêt, mais seuls les candidats sélectionnés pour une entrevue seront contactés. Nous sommes fiers d'être un employeur offrant l'égalité des chances et nous encourageons tous les candidats qualifiés à postuler.</p>
    </div>
  </div>
  
  
@endsection