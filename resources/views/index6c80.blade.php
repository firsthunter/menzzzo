
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head><base >
    <meta charset="utf-8" />
            <title>Menzzo.fr - Suivi d'expédition de votre commande</title>
        <meta name="description" content="User default listing" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="css/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="css/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="css/style-menzzo3860.css?v=1" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="img/favicon.html" />
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="fr_FR header-fixed header-mobile-fixed subheader-enabled page-loading">
<!--begin::Main-->
<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile bg-white header-mobile-fixed">
    <!--begin::Logo-->
            <a class="mr-20 logo">
            <img class="max-h-37px"
                 src="img/logo-site-3.png"
                 alt="Logo" width="208">
        </a>
    </div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header flex-column header-fixed">
                <!--begin::Top-->
                <div class="header-top">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Left-->
                        <div class="d-none d-lg-flex align-items-center mr-3">
                            <!--begin::Logo-->
                                                            <a  class="mr-20 logo">
                                    <img class="max-h-37px"
                                         src ="img/logo-site-3.png"
                                        alt="" width="208">
                                </a>
                                                        <!--                            end::Logo-->
                        </div>
                        <!--end::Left-->
                        <!--begin::Topbar-->
                        <div class="topbar bg-white">
                            <!--begin::User-->
                            <div class="topbar-item">
                                                                    <a href="https://www.menzzo.fr/" target="_blank" class="btn btn-outline-danger btn-sm mr-3">
                                        <i class="fas fa-globe-europe"></i>Aller sur le site</a>
                                                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Top-->
            </div>
            <!--end::Header-->
                        <!--begin::Content-->
                            <!-- Modal shipping address-->
                <div class="modal fade shipping" id="modalShippingAdress" tabindex="-1" role="dialog" aria-labelledby="modalShippingAdressLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Adresse de livraison</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form fv-plugins-bootstrap fv-plugins-framework" id="shipping" novalidate="novalidate">
                                    <div class="fade show mb-5" role="alert" id="alert-modal-address-shipping">
                                        <div class="alert-text"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" class="form-control form-control-sm lastname" placeholder="Nom" value="brahmi">
                                    </div>
                                    <div class="form-group">
                                        <label>Prénom</label>
                                        <input type="text" class="form-control form-control-sm firstname" placeholder="Prénom" value="sden">
                                    </div>
                                    <div class="form-group">
                                        <label>Rue</label>
                                        <input type="text" class="form-control form-control-sm street" placeholder="Rue" value="Paris">
                                    </div>
                                    <div class="form-group">
                                        <label>Code Postal</label>
                                        <input type="text" class="form-control form-control-sm postcode" data-type="shipping" data-zip="75000" placeholder="Code postal" value="75000">
                                        <div class="fv-plugins-message-container">
                                            <div data-field="postcode" data-validator="postcode"  class="postcode fv-help-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Ville</label>
                                        <input type="text" class="form-control form-control-sm city" placeholder="Ville" value="Paris">
                                    </div>
                                    <div class="form-group">
                                        <label>Téléphone</label>
                                        <input type="text" class="form-control form-control-sm telephone" placeholder="Télephone" value="554693">
                                    </div>
                                                                        <div class="form-group">
                                        <label>Pays</label>
                                        <input type="text" disabled class="form-control form-control-sm" placeholder="Pays" value="France">
                                    </div>
                                                                    </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Fermer</button>
                                <button type="button" id="shipping" class="btn btn-primary font-weight-bold save-address">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </div>
                                        <!-- Modal billing address-->
                <div class="modal fade billing" id="modalBillingAdress" tabindex="-1" role="dialog" aria-labelledby="modalBillingAdressLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Adresse de facturation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form fv-plugins-bootstrap fv-plugins-framework" id="billing" novalidate="novalidate">
                                    <div class="fade show mb-5" role="alert" id="alert-modal-address-billing">
                                        <div class="alert-text"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" class="form-control form-control-sm lastname" placeholder="Nom" value="brahmi">
                                    </div>
                                    <div class="form-group">
                                        <label>Prénom</label>
                                        <input type="text" class="form-control form-control-sm firstname" placeholder="Prénom" value="sden">
                                    </div>
                                    <div class="form-group">
                                        <label>Rue</label>
                                        <input type="text" class="form-control form-control-sm street"  placeholder="Rue" value="Paris">
                                    </div>
                                    <div class="form-group">
                                        <label>Code Postal</label>
                                        <input type="text" class="form-control form-control-sm postcode" data-type="billing" data-zip="75000" placeholder="Code postal" value="75000">
                                        <div class="fv-plugins-message-container">
                                            <div data-field="postcode" data-validator="postcode" class="postcode fv-help-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Ville</label>
                                        <input type="text" class="form-control form-control-sm city"  placeholder="Ville" value="Paris">
                                    </div>
                                    <div class="form-group">
                                        <label>Téléphone</label>
                                        <input type="text" class="form-control form-control-sm telephone"  placeholder="Télephone" value="554693">
                                    </div>
                                                                        <div class="form-group">
                                        <label>Pays</label>
                                        <input type="text" disabled class="form-control form-control-sm" placeholder="Pays" value="France">
                                    </div>
                                                                    </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Fermer</button>
                                <button type="button" id="billing" class="btn btn-primary font-weight-bold save-address">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <div class="container title">
                    <h2 class="dark-label text-center">Bienvenue dans votre interface de suivi de commande</h2>
                </div>
                <div class="container title">
                    <div class="row card-customer bg-white p-4">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <!--begin::Callout-->
                            <div class="card-custom mb-2">
                                <div class="card-body-customer">
                                    <div class="d-flex align-items-center justify-content-between flex-lg-wrap flex-xl-nowrap">
                                        <div class="d-flex flex-column mr-5">
                                            <a class="h4 text-dark text-hover-primary">Bonjour cher(e),</a>
                                            <p class="order-info text-dark-100">sden brahmi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-custom mb-2">
                                <div class="card-body-customer-order">
                                    <div class="d-flex align-items-center justify-content-between flex-lg-wrap flex-xl-nowrap">
                                        <div class="d-flex flex-column mr-5">
                                            <a class="h4 text-dark text-hover-primary">Commande:</a>
                                            <p class="order-info text-dark-100">3000000221</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="card-custom mb-2">
                                <div class="card-body-customer-order">
                                    <div class="d-flex align-items-center justify-content-between flex-lg-wrap flex-xl-nowrap">
                                        <div class="d-flex flex-column mr-5">
                                            <a class="h4 text-dark text-hover-primary">Date:</a>
                                            <p class="order-info text-dark-100">21/07/2022 13:24:21</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Callout-->
                        </div>
                        <div class="col-lg-4  col">
                            <!--begin::Callout-->
                            <div class="card-custom mb-2">
                                <div class="card-body-customer-adress billing">
                                    <div class="d-flex align-items-center justify-content-between flex-lg-wrap flex-xl-nowrap">
                                        <div class="d-flex flex-column mb-2">
                                            <a class="h4 text-dark text-hover-primary mb-2">Adresse de facturation</a>
                                            <p class="text-dark-50 mb-1">sden brahmi,</p>
                                            <p class="text-dark-50 mb-1">Paris</p>
                                            <p class="text-dark-50 mb-1">75000 Paris</p>
                                            <p class="text-dark-50 mb-1">FR</p>
                                            <p class="text-dark-50 mb-1">554693</p>
                                        </div>
                                    </div>
                                    <div class="">
                                                                                    <button type="button" class="btn btn-light btn-icon-success btn-hover-icon-success btn-text-success btn-hover-text-success font-weight-bold mr-2" data-toggle="modal" data-target="#modalBillingAdress">
                                                Modifier<i class="far fa-edit ml-3"></i>
                                            </button>
                                                                            </div>
                                </div>
                            </div>
                            <!--end::Callout-->
                        </div>
                        <div class="col-lg-4  col">
                            <!--begin::Callout-->
                            <div class="card-custom mb-2">
                                <div class="card-body-customer-adress">
                                    <div class="d-flex align-items-center justify-content-between flex-lg-wrap flex-xl-nowrap">
                                        <div class="d-flex flex-column mb-2">
                                            <a class="h4 text-dark text-hover-primary mb-2">Adresse de livraison</a>
                                            <p class="text-dark-50 mb-1">sden brahmi,</p>
                                            <p class="text-dark-50 mb-1">Paris</p>
                                            <p class="text-dark-50 mb-1">75000 Paris</p>
                                            <p class="text-dark-50 mb-1">FR</p>
                                            <p class="text-dark-50 mb-1">554693</p>
                                        </div>
                                    </div>
                                    <div class="">
                                                                                <button type="button" class="btn btn-light btn-icon-success btn-hover-icon-success btn-text-success btn-hover-text-success font-weight-bold mr-2" data-toggle="modal" data-target="#modalShippingAdress">
                                            Modifier<i class="far fa-edit ml-3"></i>
                                        </button>
                                                                            </div>
                                </div>
                            </div>
                            <!--end::Callout-->
                        </div>
                    </div>
                </div>

                <!--begin::Subheader-->
                <div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
                    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">

                        <!--begin::Details-->
                        <div class="d-flex align-items-center flex-wrap mr-2">
                            <!--begin::Title-->
                            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Liste des produits</h5>
                            <!--end::Title-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Toolbar-->
                        <div class="d-flex align-items-center">
                            <!--begin::Button-->
<!--                                <a class="btn btn-light-danger font-weight-bold mr-2">Annuler la commande</a>-->
                            <!--end::Button-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                </div>
                <!--end::Subheader-->
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container">
                        <input class="hidden" id="product-id" value="23924">
<div class="modal fade" id="validationEchange" tabindex="-1" role="dialog" aria-labelledby="validationEchangeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="validationEchangeModalLabel">Valider l'échange </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                Voulez vous vraimenet valider l'échange de ce produit.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-danger font-weight-bold btn-confirmer-validation" data-dismiss="modal"> Non</button>
                <button type="button" class="btn btn-primary font-weight-bold"> Oui</button>
            </div>
        </div>
    </div>
</div>
<!--begin::Card-->
<div class="card card-custom gutter-b">
    <div class="card-body">
        <!--begin::Top-->
        <div class="d-flex">
            <!--begin::Pic-->
            <div class="flex-shrink-0 mr-7">
                <div class="symbol symbol-50 symbol-lg-90">
                    <img alt="Suspension 3 lampes à cage filaire échelle Cyclos D41cm Métal Noir" src="../www.menzzo.fr/media/catalog/product/s/u/s/suspension-3-lampes-a-cage-filaire-echelle-cyclos-d41cm0_0-6220aca7913c1.html" />
                </div>
            </div>
            <!--end::Pic-->
            <!--begin: Info-->
            <div class="flex-grow-1">
                <!--begin::Title-->
                <div class="d-flex align-items-center justify-content-between flex-wrap mt-2 details-card-item">
                    <!--begin::User-->
                    <div class="mr-3">
                        <!--begin::Name-->
                        <a  class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">Suspension 3 lampes à cage filaire échelle Cyclos D41cm Métal Noir</a>
                        <!--end::Name-->
                    </div>
                    <!--begin::User-->
                    <!--begin::Actions-->
                    <div class="my-lg-0 my-1">
                                            </div>
                    <!--end::Actions-->
                </div>
                <!--end::Title-->
                <!--begin::Content-->
                <div class="d-flex align-items-center flex-wrap justify-content-between details-card-item">
                    <!--begin::status-->
                    <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">
                        <span class="font-weight-bold mr-3">Statut:</span>
                                                <span class=" mr-3 text-success "><strong>En stock </strong></span>
                    </div>
                                        <!--end::status-->
                </div>
<!--                -->
                                                    <div class="d-flex align-items-center flex-wrap justify-content-between details-card-item">
                        <!--begin::status-->
                        <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">
                            <span class="font-weight-bold mr-3">Délais de livraison:</span>
                                                        <span class=" font-weight-bold mr-3 text-dark "><strong>Livraison entre le 03 et 09 août </strong></span>
                        </div>
                    </div>
                                                <!--end::Content-->
            </div>
            <!--end::Info-->
        </div>

        <!-- begin::disponibilite -->
                    <!--begin::Accordion-->
            <div class="accordion accordion-light accordion-light-borderless accordion-svg-toggle" id="accordionExample7">
                <div class="card-accordion">
                    <div class="card-header" id="headingTwo7">
                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo7-23924">
                            <div class="card-label pl-4">
                                <button class="info-dispo btn btn-danger font-weight-bold btn-pill mr-2" id="23924"><span>Suivre mon produit</span></button>
                            </div>
                        </div>
                    </div>
                    <div id="collapseTwo7-23924" class="collapse" data-parent="#accordionExample7">
                        <div class="row">
                            <!--begin::Timeline-->
                            <div class="col-lg-6">
                                <div class="bg-white mt-10 mb-5">
                                    <div class="card-title">
                                        <h3 class="card-label uppercase-title">Dans combien de semaines votre produit est-il disponible?</h3>
                                    </div>
                                    <a  class="d-flex align-items-center text-danger font-size-h6 font-weight-bold mr-3 mb-5 hidden see-steps see-more-steps" id="23924">Voir les étapes précédentes</a>
                                    <a  class="d-flex align-items-center text-danger font-size-h6 font-weight-bold mr-3 mb-5 hidden see-steps see-less-steps" id="23924">Masquer les étapes précédentes</a>
                                    <div class="timeline timeline-3">
                                        <div class="timeline-items">
                                            <div class="timeline-item  ">
                                                <div class="timeline-media" >
                                                    <img alt="Pic" src="img/etapes12.png"/>
                                                </div>
                                                <div class="timeline-content orange ">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a class="white-label uppercase-title font-weight-bold">L'ART ET LA MATIÈRE :</a>
                                                            <span class="white-label font-weight-bolder label-inline ml-2">Dispo: 12 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 white-label">L'usine collecte toutes les matières premières nécessaires à la fabrication de votre produit.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item ">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes11.png"/>
                                                </div>
                                                <div class="timeline-content  blue">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a
                                                                    class="white-label uppercase-title font-weight-bold">L'ASSEMBLAGE</a>
                                                            <span class="white-label font-weight-bolder label-inline ml-2">Dispo: 11 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 white-label">Votre produit vie à cette étape: toutes les pièces sont mésurées, moulées, coupées at assemblées.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item ">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes10.png"/>
                                                </div>
                                                <div class="timeline-content  skyblue">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a  class="dark-label uppercase-title font-weight-bold">CONTRÔLE QUALITÉ</a>
                                                            <span class="dark-label font-weight-bolder label-inline ml-2">Dispo: 10 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 dark-label">Un insecteur qualité contrôle les articles de la production afin de corriger d'éventuelles malfaçons.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item ">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes9.png"/>
                                                </div>
                                                <div class="timeline-content beige">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a  class="dark-label uppercase-title font-weight-bold">EMBALLAGE</a>
                                                            <span class="dark-label font-weight-bolder label-inline ml-2">Dispo: 9 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 dark-label">Votre produit est placé dans un carton et mis sur palette. il est prêt à sortit de l'usine, direction le port.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item ">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes8.png"/>
                                                </div>
                                                <div class="timeline-content yellow">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a  class="dark-label uppercase-title font-weight-bold">ARRIVÉE AU PORT</a>
                                                            <span class="dark-label font-weight-bolder label-inline ml-2">Dispo: 8 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 dark-label">
                                                        Dispo: 8 semaines                                                    Votre produit a été placé dans son conteneur et conduit jusq'au port, prêt à embarquer</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item ">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes7.png"/>
                                                </div>
                                                <div class="timeline-content croisiere orange">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a
                                                                    class="white-label uppercase-title font-weight-bold">LA CROISIÈRE</a>
                                                            <span class="white-label font-weight-bolder label-inline ml-2">Dispo: 7 et 4 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 white-label">Votre produit st dans son conteneur, sur le  bateau, et parcoure son trajet contre vents et marées!!</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item ">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes3.png"/>
                                                </div>
                                                <div class="timeline-content port-francais blue">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a
                                                                    class="white-label uppercase-title font-weight-bold">LE PORT FRANÇAIS</a>
                                                            <span class="white-label font-weight-bolder label-inline ml-2">Dispo: 3 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 white-label">Débarquement immédiat pour votre produit tant attendu. Il lui reste encore un peu de route à faire ...</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item ">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes2.png"/>
                                                </div>
                                                <div class="timeline-content direction-depot skyblue">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a class="dark-label uppercase-title font-weight-bold">DIRECTION LE DÉPÔT</a>
                                                            <span class="dark-label font-weight-bolder label-inline ml-2">Dispo: 2 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 dark-label">Le conteneur a été chargé sur un camion, celui-ci est parti du Havre et se dirige vers notre dépôt!</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item ">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes1.png"/>
                                                </div>
                                                <div class="timeline-content arrivee-depot beige">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a class="dark-label uppercase-title font-weight-bold">ARRIVÉE AU DÉPÔT</a>
                                                            <span class="dark-label font-weight-bolder label-inline ml-2">Dispo: 1 semaine</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 dark-label">Your product is with us! It still needs to be labeled, filmed. An email will be sent to you very quickly, when your product is ready to be collected or handed over to your delivery person.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapesdiponible.png"/>
                                                </div>
                                                <div class="timeline-content produit-disponible yellow">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a class="dark-label uppercase-title font-weight-bold">PRODUIT DISPONIBLE</a>
                                                            <span class="dark-label font-weight-bolder label-inline ml-2">Dispo: en stock</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 dark-label">Votre produit est prêt, Prenez rendez-vous pour venir le chercher au dépôt ou attendez d'être contacté(e) par le livreur.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-media">
                                                    <img alt="Pic" class="livraison-img" src="img/etapeslivraison.png"/>
                                                </div>
                                                <div class="timeline-content livraison red">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a
                                                                    class="white-label uppercase-title font-weight-bold">LIVRAISON</a>
                                                            <span class="white-label font-weight-bolder label-inline ml-2">+24h à 7 jours ouvrés</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- end::timeline-->
                                <div class="bg-white mt-10 mb-5">
                                    <div class="card-title">
                                        <h3 class="card-label uppercase-title">Pourquoi un délai de réapprovisionnement peut-il être rallongé ?</h3>
                                    </div>
                                    <p class="p-0 dark-label">Vous suivez la disponibilité d'un produit et vous avez remarqué que celui-ci avait vu son délai de réapprovisionnement rallongé de plusieurs semaines ?</p>
                                    <p class="p-0 dark-label">Pourquoi un délai de réapprovisionnement peut-il être rallongé:</p>
                                    <div class="info-img-text d-flex align-items-center">
                                        <div class="mr-2 img-info ">
                                            <img src="img/icone-qualite.gif"/>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <p class="p-0 dark-label"><strong>>Le produit n'a pas passé le contrôle qualité.</strong></p>
                                            <p class="p-0 dark-label">La production est alors retardée en fonction de l'ampleur du défaut et du nombre de produits concernés.</p>
                                            <p class="p-0 dark-label">Le produit peut alors rester bloqué à l'étape contrôle qualité pendant plusieurs jours.</p>
                                        </div>
                                    </div>
                                    <div class="info-img-text d-flex align-items-center">
                                        <div class="mr-2 img-info">
                                            <img src="img/icone-meteo.gif"/>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <p class="p-0 dark-label"><strong>>Une météo qui ralentit la progression du produit jusqu'à sa destination.</strong></p>
                                            <p class="p-0 dark-label">L'acheminement de votre produit peut rencontrer des soucis d'ordre météorologique qui retardent son arrivée. Ces aléas ne sont malheureusement pas prévisibles (par définition) et perturbent de temps en temps l'arrivée de la marchandise de plusieurs semaines.</p>
                                        </div>
                                    </div>
                                    <div class="info-img-text d-flex align-items-center">
                                        <div class="mr-2 img-info">
                                            <img src="img/icone-technique-humain.gif"/>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <p class="p-0 dark-label"><strong>>Problème technique et/ou humain.</strong></p>
                                            <p class="p-0 dark-label">L'acheminement de votre produit peut aussi être perturbé par des facteurs aussi aléatoires qu'imprévisibles allant de la simple panne mécanique à la grève nationale...</p>
                                        </div>
                                    </div>
                                </div>
                                                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Accordion-->
                <!-- end::disponibilite -->

        <!--end::Top-->
        <!--begin::Separator-->
        <div class="separator separator-solid my-7"></div>
        <!--end::Separator-->
        <!--begin::Bottom-->
        <div class="d-flex align-items-center flex-wrap">
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                <span class="mr-4">
                    <i class="flaticon2-tag icon-2x text-muted font-weight-bold"></i>
                </span>
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-lg">Référence</span>
                    <span class="font-weight-bolder font-size-h7">asr892opv1718</span>
                </div>
            </div>
            <!--end: Item-->
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                <span class="mr-4">
                    <i class="flaticon2-open-box icon-2x text-muted font-weight-bold"></i>
                </span>
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-lg"> Quantité</span>
                    <span class="font-weight-bolder font-size-h7">3</span>
                </div>
            </div>
            <!--end: Item-->
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
<!--                <span class="mr-4">-->
<!--                    <i class="flaticon-price-tag icon-2x text-muted font-weight-bold"></i>-->
<!--                </span>-->
<!--                <div class="d-flex flex-column text-dark-75">-->
<!--                    <span class="font-weight-bolder font-size-lg">--><?//= Tools::__('Price')?><!--</span>-->
<!--                    <span class="font-weight-bolder font-size-h7">--><!--<span class="text-dark-50 font-weight-bold"> €</span></span>-->
<!--                </div>-->
            </div>
            <!--end: Item-->
        </div>
        <!--end::Bottom-->
    </div>
</div>
<!--end::Card-->
<input class="hidden" id="product-id" value="5397">
<div class="modal fade" id="validationEchange" tabindex="-1" role="dialog" aria-labelledby="validationEchangeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="validationEchangeModalLabel">Valider l'échange </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                Voulez vous vraimenet valider l'échange de ce produit.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-danger font-weight-bold btn-confirmer-validation" data-dismiss="modal"> Non</button>
                <button type="button" class="btn btn-primary font-weight-bold"> Oui</button>
            </div>
        </div>
    </div>
</div>
<!--begin::Card-->
<div class="card card-custom gutter-b">
    <div class="card-body">
        <!--begin::Top-->
        <div class="d-flex">
            <!--begin::Pic-->
            <div class="flex-shrink-0 mr-7">
                <div class="symbol symbol-50 symbol-lg-90">
                    <img alt="Canapé convertible clic-clac 3 places Carla Velours Vert" src="../www.menzzo.fr/media/catalog/product/c/a/carla_jh930_velours_vert.html" />
                </div>
            </div>
            <!--end::Pic-->
            <!--begin: Info-->
            <div class="flex-grow-1">
                <!--begin::Title-->
                <div class="d-flex align-items-center justify-content-between flex-wrap mt-2 details-card-item">
                    <!--begin::User-->
                    <div class="mr-3">
                        <!--begin::Name-->
                        <a  class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">Canapé convertible clic-clac 3 places Carla Velours Vert</a>
                        <!--end::Name-->
                    </div>
                    <!--begin::User-->
                    <!--begin::Actions-->
                    <div class="my-lg-0 my-1">
                                            </div>
                    <!--end::Actions-->
                </div>
                <!--end::Title-->
                <!--begin::Content-->
                <div class="d-flex align-items-center flex-wrap justify-content-between details-card-item">
                    <!--begin::status-->
                    <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">
                        <span class="font-weight-bold mr-3">Statut:</span>
                                                <span class=" mr-3 text-success "><strong>En stock </strong></span>
                    </div>
                                        <!--end::status-->
                </div>
<!--                -->
                                                                <!--end::Content-->
            </div>
            <!--end::Info-->
        </div>

        <!-- begin::disponibilite -->
                    <!--begin::Accordion-->
            <div class="accordion accordion-light accordion-light-borderless accordion-svg-toggle" id="accordionExample7">
                <div class="card-accordion">
                    <div class="card-header" id="headingTwo7">
                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo7-5397">
                            <div class="card-label pl-4">
                                <button class="info-dispo btn btn-danger font-weight-bold btn-pill mr-2" id="5397"><span>Suivre mon produit</span></button>
                            </div>
                        </div>
                    </div>
                    <div id="collapseTwo7-5397" class="collapse" data-parent="#accordionExample7">
                        <div class="row">
                            <!--begin::Timeline-->
                            <div class="col-lg-6">
                                <div class="bg-white mt-10 mb-5">
                                    <div class="card-title">
                                        <h3 class="card-label uppercase-title">Dans combien de semaines votre produit est-il disponible?</h3>
                                    </div>
                                    <a  class="d-flex align-items-center text-danger font-size-h6 font-weight-bold mr-3 mb-5 hidden see-steps see-more-steps" id="5397">Voir les étapes précédentes</a>
                                    <a  class="d-flex align-items-center text-danger font-size-h6 font-weight-bold mr-3 mb-5 hidden see-steps see-less-steps" id="5397">Masquer les étapes précédentes</a>
                                    <div class="timeline timeline-3">
                                        <div class="timeline-items">
                                            <div class="timeline-item  previous-step">
                                                <div class="timeline-media" >
                                                    <img alt="Pic" src="img/etapes12.png"/>
                                                </div>
                                                <div class="timeline-content disable ">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a class="white-label uppercase-title font-weight-bold">L'ART ET LA MATIÈRE :</a>
                                                            <span class="white-label font-weight-bolder label-inline ml-2">Dispo: 12 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 white-label">L'usine collecte toutes les matières premières nécessaires à la fabrication de votre produit.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item previous-step">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes11.png"/>
                                                </div>
                                                <div class="timeline-content  disable">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a
                                                                    class="white-label uppercase-title font-weight-bold">L'ASSEMBLAGE</a>
                                                            <span class="white-label font-weight-bolder label-inline ml-2">Dispo: 11 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 white-label">Votre produit vie à cette étape: toutes les pièces sont mésurées, moulées, coupées at assemblées.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item previous-step">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes10.png"/>
                                                </div>
                                                <div class="timeline-content  disable">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a  class="dark-label uppercase-title font-weight-bold">CONTRÔLE QUALITÉ</a>
                                                            <span class="dark-label font-weight-bolder label-inline ml-2">Dispo: 10 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 dark-label">Un insecteur qualité contrôle les articles de la production afin de corriger d'éventuelles malfaçons.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item previous-step">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes9.png"/>
                                                </div>
                                                <div class="timeline-content disable">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a  class="dark-label uppercase-title font-weight-bold">EMBALLAGE</a>
                                                            <span class="dark-label font-weight-bolder label-inline ml-2">Dispo: 9 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 dark-label">Votre produit est placé dans un carton et mis sur palette. il est prêt à sortit de l'usine, direction le port.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item previous-step">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes8.png"/>
                                                </div>
                                                <div class="timeline-content disable">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a  class="dark-label uppercase-title font-weight-bold">ARRIVÉE AU PORT</a>
                                                            <span class="dark-label font-weight-bolder label-inline ml-2">Dispo: 8 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 dark-label">
                                                        Dispo: 8 semaines                                                    Votre produit a été placé dans son conteneur et conduit jusq'au port, prêt à embarquer</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item previous-step">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes7.png"/>
                                                </div>
                                                <div class="timeline-content croisiere disable">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a
                                                                    class="white-label uppercase-title font-weight-bold">LA CROISIÈRE</a>
                                                            <span class="white-label font-weight-bolder label-inline ml-2">Dispo: 7 et 4 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 white-label">Votre produit st dans son conteneur, sur le  bateau, et parcoure son trajet contre vents et marées!!</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item previous-step">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes3.png"/>
                                                </div>
                                                <div class="timeline-content port-francais disable">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a
                                                                    class="white-label uppercase-title font-weight-bold">LE PORT FRANÇAIS</a>
                                                            <span class="white-label font-weight-bolder label-inline ml-2">Dispo: 3 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 white-label">Débarquement immédiat pour votre produit tant attendu. Il lui reste encore un peu de route à faire ...</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item previous-step">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes2.png"/>
                                                </div>
                                                <div class="timeline-content direction-depot disable">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a class="dark-label uppercase-title font-weight-bold">DIRECTION LE DÉPÔT</a>
                                                            <span class="dark-label font-weight-bolder label-inline ml-2">Dispo: 2 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 dark-label">Le conteneur a été chargé sur un camion, celui-ci est parti du Havre et se dirige vers notre dépôt!</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item ">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes1.png"/>
                                                </div>
                                                <div class="timeline-content arrivee-depot beige">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a class="dark-label uppercase-title font-weight-bold">ARRIVÉE AU DÉPÔT</a>
                                                            <span class="dark-label font-weight-bolder label-inline ml-2">Dispo: 1 semaine</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 dark-label">Your product is with us! It still needs to be labeled, filmed. An email will be sent to you very quickly, when your product is ready to be collected or handed over to your delivery person.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapesdiponible.png"/>
                                                </div>
                                                <div class="timeline-content produit-disponible yellow">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a class="dark-label uppercase-title font-weight-bold">PRODUIT DISPONIBLE</a>
                                                            <span class="dark-label font-weight-bolder label-inline ml-2">Dispo: en stock</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 dark-label">Votre produit est prêt, Prenez rendez-vous pour venir le chercher au dépôt ou attendez d'être contacté(e) par le livreur.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-media">
                                                    <img alt="Pic" class="livraison-img" src="img/etapeslivraison.png"/>
                                                </div>
                                                <div class="timeline-content livraison red">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a
                                                                    class="white-label uppercase-title font-weight-bold">LIVRAISON</a>
                                                            <span class="white-label font-weight-bolder label-inline ml-2">+24h à 7 jours ouvrés</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- end::timeline-->
                                <div class="bg-white mt-10 mb-5">
                                    <div class="card-title">
                                        <h3 class="card-label uppercase-title">Pourquoi un délai de réapprovisionnement peut-il être rallongé ?</h3>
                                    </div>
                                    <p class="p-0 dark-label">Vous suivez la disponibilité d'un produit et vous avez remarqué que celui-ci avait vu son délai de réapprovisionnement rallongé de plusieurs semaines ?</p>
                                    <p class="p-0 dark-label">Pourquoi un délai de réapprovisionnement peut-il être rallongé:</p>
                                    <div class="info-img-text d-flex align-items-center">
                                        <div class="mr-2 img-info ">
                                            <img src="img/icone-qualite.gif"/>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <p class="p-0 dark-label"><strong>>Le produit n'a pas passé le contrôle qualité.</strong></p>
                                            <p class="p-0 dark-label">La production est alors retardée en fonction de l'ampleur du défaut et du nombre de produits concernés.</p>
                                            <p class="p-0 dark-label">Le produit peut alors rester bloqué à l'étape contrôle qualité pendant plusieurs jours.</p>
                                        </div>
                                    </div>
                                    <div class="info-img-text d-flex align-items-center">
                                        <div class="mr-2 img-info">
                                            <img src="img/icone-meteo.gif"/>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <p class="p-0 dark-label"><strong>>Une météo qui ralentit la progression du produit jusqu'à sa destination.</strong></p>
                                            <p class="p-0 dark-label">L'acheminement de votre produit peut rencontrer des soucis d'ordre météorologique qui retardent son arrivée. Ces aléas ne sont malheureusement pas prévisibles (par définition) et perturbent de temps en temps l'arrivée de la marchandise de plusieurs semaines.</p>
                                        </div>
                                    </div>
                                    <div class="info-img-text d-flex align-items-center">
                                        <div class="mr-2 img-info">
                                            <img src="img/icone-technique-humain.gif"/>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <p class="p-0 dark-label"><strong>>Problème technique et/ou humain.</strong></p>
                                            <p class="p-0 dark-label">L'acheminement de votre produit peut aussi être perturbé par des facteurs aussi aléatoires qu'imprévisibles allant de la simple panne mécanique à la grève nationale...</p>
                                        </div>
                                    </div>
                                </div>
                                                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Accordion-->
                <!-- end::disponibilite -->

        <!--end::Top-->
        <!--begin::Separator-->
        <div class="separator separator-solid my-7"></div>
        <!--end::Separator-->
        <!--begin::Bottom-->
        <div class="d-flex align-items-center flex-wrap">
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                <span class="mr-4">
                    <i class="flaticon2-tag icon-2x text-muted font-weight-bold"></i>
                </span>
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-lg">Référence</span>
                    <span class="font-weight-bolder font-size-h7">jh930velvetgreen</span>
                </div>
            </div>
            <!--end: Item-->
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                <span class="mr-4">
                    <i class="flaticon2-open-box icon-2x text-muted font-weight-bold"></i>
                </span>
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-lg"> Quantité</span>
                    <span class="font-weight-bolder font-size-h7">2</span>
                </div>
            </div>
            <!--end: Item-->
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
<!--                <span class="mr-4">-->
<!--                    <i class="flaticon-price-tag icon-2x text-muted font-weight-bold"></i>-->
<!--                </span>-->
<!--                <div class="d-flex flex-column text-dark-75">-->
<!--                    <span class="font-weight-bolder font-size-lg">--><?//= Tools::__('Price')?><!--</span>-->
<!--                    <span class="font-weight-bolder font-size-h7">--><!--<span class="text-dark-50 font-weight-bold"> €</span></span>-->
<!--                </div>-->
            </div>
            <!--end: Item-->
        </div>
        <!--end::Bottom-->
    </div>
</div>
<!--end::Card-->
<input class="hidden" id="product-id" value="23919">
<div class="modal fade" id="validationEchange" tabindex="-1" role="dialog" aria-labelledby="validationEchangeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="validationEchangeModalLabel">Valider l'échange </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                Voulez vous vraimenet valider l'échange de ce produit.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-danger font-weight-bold btn-confirmer-validation" data-dismiss="modal"> Non</button>
                <button type="button" class="btn btn-primary font-weight-bold"> Oui</button>
            </div>
        </div>
    </div>
</div>
<!--begin::Card-->
<div class="card card-custom gutter-b">
    <div class="card-body">
        <!--begin::Top-->
        <div class="d-flex">
            <!--begin::Pic-->
            <div class="flex-shrink-0 mr-7">
                <div class="symbol symbol-50 symbol-lg-90">
                    <img alt="Suspension 3 lampes géodes saccade Phanes Métal Noir" src="../www.menzzo.fr/media/catalog/product/s/u/s/suspension-3-lampes-geodes-saccade-phanes-metal-noir_0-6220b4d2e7ce2.html" />
                </div>
            </div>
            <!--end::Pic-->
            <!--begin: Info-->
            <div class="flex-grow-1">
                <!--begin::Title-->
                <div class="d-flex align-items-center justify-content-between flex-wrap mt-2 details-card-item">
                    <!--begin::User-->
                    <div class="mr-3">
                        <!--begin::Name-->
                        <a  class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">Suspension 3 lampes géodes saccade Phanes Métal Noir</a>
                        <!--end::Name-->
                    </div>
                    <!--begin::User-->
                    <!--begin::Actions-->
                    <div class="my-lg-0 my-1">
                                            </div>
                    <!--end::Actions-->
                </div>
                <!--end::Title-->
                <!--begin::Content-->
                <div class="d-flex align-items-center flex-wrap justify-content-between details-card-item">
                    <!--begin::status-->
                    <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">
                        <span class="font-weight-bold mr-3">Statut:</span>
                                                <span class=" mr-3 text-success "><strong>En stock </strong></span>
                    </div>
                                        <!--end::status-->
                </div>
<!--                -->
                                                    <div class="d-flex align-items-center flex-wrap justify-content-between details-card-item">
                        <!--begin::status-->
                        <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">
                            <span class="font-weight-bold mr-3">Délais de livraison:</span>
                                                        <span class=" font-weight-bold mr-3 text-dark "><strong>Livraison entre le 03 et 09 août </strong></span>
                        </div>
                    </div>
                                                <!--end::Content-->
            </div>
            <!--end::Info-->
        </div>

        <!-- begin::disponibilite -->
                    <!--begin::Accordion-->
            <div class="accordion accordion-light accordion-light-borderless accordion-svg-toggle" id="accordionExample7">
                <div class="card-accordion">
                    <div class="card-header" id="headingTwo7">
                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo7-23919">
                            <div class="card-label pl-4">
                                <button class="info-dispo btn btn-danger font-weight-bold btn-pill mr-2" id="23919"><span>Suivre mon produit</span></button>
                            </div>
                        </div>
                    </div>
                    <div id="collapseTwo7-23919" class="collapse" data-parent="#accordionExample7">
                        <div class="row">
                            <!--begin::Timeline-->
                            <div class="col-lg-6">
                                <div class="bg-white mt-10 mb-5">
                                    <div class="card-title">
                                        <h3 class="card-label uppercase-title">Dans combien de semaines votre produit est-il disponible?</h3>
                                    </div>
                                    <a  class="d-flex align-items-center text-danger font-size-h6 font-weight-bold mr-3 mb-5 hidden see-steps see-more-steps" id="23919">Voir les étapes précédentes</a>
                                    <a  class="d-flex align-items-center text-danger font-size-h6 font-weight-bold mr-3 mb-5 hidden see-steps see-less-steps" id="23919">Masquer les étapes précédentes</a>
                                    <div class="timeline timeline-3">
                                        <div class="timeline-items">
                                            <div class="timeline-item  ">
                                                <div class="timeline-media" >
                                                    <img alt="Pic" src="img/etapes12.png"/>
                                                </div>
                                                <div class="timeline-content orange ">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a class="white-label uppercase-title font-weight-bold">L'ART ET LA MATIÈRE :</a>
                                                            <span class="white-label font-weight-bolder label-inline ml-2">Dispo: 12 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 white-label">L'usine collecte toutes les matières premières nécessaires à la fabrication de votre produit.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item ">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes11.png"/>
                                                </div>
                                                <div class="timeline-content  blue">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a
                                                                    class="white-label uppercase-title font-weight-bold">L'ASSEMBLAGE</a>
                                                            <span class="white-label font-weight-bolder label-inline ml-2">Dispo: 11 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 white-label">Votre produit vie à cette étape: toutes les pièces sont mésurées, moulées, coupées at assemblées.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item ">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes10.png"/>
                                                </div>
                                                <div class="timeline-content  skyblue">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a  class="dark-label uppercase-title font-weight-bold">CONTRÔLE QUALITÉ</a>
                                                            <span class="dark-label font-weight-bolder label-inline ml-2">Dispo: 10 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 dark-label">Un insecteur qualité contrôle les articles de la production afin de corriger d'éventuelles malfaçons.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item ">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes9.png"/>
                                                </div>
                                                <div class="timeline-content beige">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a  class="dark-label uppercase-title font-weight-bold">EMBALLAGE</a>
                                                            <span class="dark-label font-weight-bolder label-inline ml-2">Dispo: 9 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 dark-label">Votre produit est placé dans un carton et mis sur palette. il est prêt à sortit de l'usine, direction le port.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item ">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes8.png"/>
                                                </div>
                                                <div class="timeline-content yellow">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a  class="dark-label uppercase-title font-weight-bold">ARRIVÉE AU PORT</a>
                                                            <span class="dark-label font-weight-bolder label-inline ml-2">Dispo: 8 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 dark-label">
                                                        Dispo: 8 semaines                                                    Votre produit a été placé dans son conteneur et conduit jusq'au port, prêt à embarquer</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item ">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes7.png"/>
                                                </div>
                                                <div class="timeline-content croisiere orange">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a
                                                                    class="white-label uppercase-title font-weight-bold">LA CROISIÈRE</a>
                                                            <span class="white-label font-weight-bolder label-inline ml-2">Dispo: 7 et 4 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 white-label">Votre produit st dans son conteneur, sur le  bateau, et parcoure son trajet contre vents et marées!!</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item ">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes3.png"/>
                                                </div>
                                                <div class="timeline-content port-francais blue">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a
                                                                    class="white-label uppercase-title font-weight-bold">LE PORT FRANÇAIS</a>
                                                            <span class="white-label font-weight-bolder label-inline ml-2">Dispo: 3 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 white-label">Débarquement immédiat pour votre produit tant attendu. Il lui reste encore un peu de route à faire ...</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item ">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes2.png"/>
                                                </div>
                                                <div class="timeline-content direction-depot skyblue">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a class="dark-label uppercase-title font-weight-bold">DIRECTION LE DÉPÔT</a>
                                                            <span class="dark-label font-weight-bolder label-inline ml-2">Dispo: 2 semaines</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 dark-label">Le conteneur a été chargé sur un camion, celui-ci est parti du Havre et se dirige vers notre dépôt!</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item ">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapes1.png"/>
                                                </div>
                                                <div class="timeline-content arrivee-depot beige">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a class="dark-label uppercase-title font-weight-bold">ARRIVÉE AU DÉPÔT</a>
                                                            <span class="dark-label font-weight-bolder label-inline ml-2">Dispo: 1 semaine</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 dark-label">Your product is with us! It still needs to be labeled, filmed. An email will be sent to you very quickly, when your product is ready to be collected or handed over to your delivery person.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-media">
                                                    <img alt="Pic" src="img/etapesdiponible.png"/>
                                                </div>
                                                <div class="timeline-content produit-disponible yellow">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a class="dark-label uppercase-title font-weight-bold">PRODUIT DISPONIBLE</a>
                                                            <span class="dark-label font-weight-bolder label-inline ml-2">Dispo: en stock</span>
                                                        </div>
                                                    </div>
                                                    <p class="p-0 dark-label">Votre produit est prêt, Prenez rendez-vous pour venir le chercher au dépôt ou attendez d'être contacté(e) par le livreur.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-media">
                                                    <img alt="Pic" class="livraison-img" src="img/etapeslivraison.png"/>
                                                </div>
                                                <div class="timeline-content livraison red">
                                                    <div class="align-items-center justify-content-between mb-3">
                                                        <div class="mr-2">
                                                            <a
                                                                    class="white-label uppercase-title font-weight-bold">LIVRAISON</a>
                                                            <span class="white-label font-weight-bolder label-inline ml-2">+24h à 7 jours ouvrés</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- end::timeline-->
                                <div class="bg-white mt-10 mb-5">
                                    <div class="card-title">
                                        <h3 class="card-label uppercase-title">Pourquoi un délai de réapprovisionnement peut-il être rallongé ?</h3>
                                    </div>
                                    <p class="p-0 dark-label">Vous suivez la disponibilité d'un produit et vous avez remarqué que celui-ci avait vu son délai de réapprovisionnement rallongé de plusieurs semaines ?</p>
                                    <p class="p-0 dark-label">Pourquoi un délai de réapprovisionnement peut-il être rallongé:</p>
                                    <div class="info-img-text d-flex align-items-center">
                                        <div class="mr-2 img-info ">
                                            <img src="img/icone-qualite.gif"/>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <p class="p-0 dark-label"><strong>>Le produit n'a pas passé le contrôle qualité.</strong></p>
                                            <p class="p-0 dark-label">La production est alors retardée en fonction de l'ampleur du défaut et du nombre de produits concernés.</p>
                                            <p class="p-0 dark-label">Le produit peut alors rester bloqué à l'étape contrôle qualité pendant plusieurs jours.</p>
                                        </div>
                                    </div>
                                    <div class="info-img-text d-flex align-items-center">
                                        <div class="mr-2 img-info">
                                            <img src="img/icone-meteo.gif"/>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <p class="p-0 dark-label"><strong>>Une météo qui ralentit la progression du produit jusqu'à sa destination.</strong></p>
                                            <p class="p-0 dark-label">L'acheminement de votre produit peut rencontrer des soucis d'ordre météorologique qui retardent son arrivée. Ces aléas ne sont malheureusement pas prévisibles (par définition) et perturbent de temps en temps l'arrivée de la marchandise de plusieurs semaines.</p>
                                        </div>
                                    </div>
                                    <div class="info-img-text d-flex align-items-center">
                                        <div class="mr-2 img-info">
                                            <img src="img/icone-technique-humain.gif"/>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <p class="p-0 dark-label"><strong>>Problème technique et/ou humain.</strong></p>
                                            <p class="p-0 dark-label">L'acheminement de votre produit peut aussi être perturbé par des facteurs aussi aléatoires qu'imprévisibles allant de la simple panne mécanique à la grève nationale...</p>
                                        </div>
                                    </div>
                                </div>
                                                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Accordion-->
                <!-- end::disponibilite -->

        <!--end::Top-->
        <!--begin::Separator-->
        <div class="separator separator-solid my-7"></div>
        <!--end::Separator-->
        <!--begin::Bottom-->
        <div class="d-flex align-items-center flex-wrap">
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                <span class="mr-4">
                    <i class="flaticon2-tag icon-2x text-muted font-weight-bold"></i>
                </span>
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-lg">Référence</span>
                    <span class="font-weight-bolder font-size-h7">asr525nor1634</span>
                </div>
            </div>
            <!--end: Item-->
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                <span class="mr-4">
                    <i class="flaticon2-open-box icon-2x text-muted font-weight-bold"></i>
                </span>
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-lg"> Quantité</span>
                    <span class="font-weight-bolder font-size-h7">1</span>
                </div>
            </div>
            <!--end: Item-->
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
<!--                <span class="mr-4">-->
<!--                    <i class="flaticon-price-tag icon-2x text-muted font-weight-bold"></i>-->
<!--                </span>-->
<!--                <div class="d-flex flex-column text-dark-75">-->
<!--                    <span class="font-weight-bolder font-size-lg">--><?//= Tools::__('Price')?><!--</span>-->
<!--                    <span class="font-weight-bolder font-size-h7">--><!--<span class="text-dark-50 font-weight-bold"> €</span></span>-->
<!--                </div>-->
            </div>
            <!--end: Item-->
        </div>
        <!--end::Bottom-->
    </div>
</div>
<!--end::Card-->
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->
                                <!--begin::Footer-->
                <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2">Copyright &copy; 2022</span>
                                                            <a href="http://menzzo.fr/" target="_blank" class="text-dark-75 text-hover-primary">Menzzo</a>
                                                    </div>
                        <!--end::Copyright-->
                        <!--begin::Nav-->
                        <div class="nav nav-dark order-1 order-md-2">
                                                            <a href="https://www.menzzo.fr/a-propos-de-menzzo/" target="_blank" class="nav-link pr-3 pl-0">A propos</a>
                                                    </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
                <!--end::Svg Icon-->
			</span>
    </div>
    <!--end::Scrolltop-->
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#0BB783", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#D7F9EF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="js/plugins.bundle.js"></script>
    <script src="js/prismjs.bundle.js"></script>
    <script src="js/scripts.bundle.js"></script>
    <script src="js/main1e96.js?1659617802"></script>
    <script src="js/jquery.ui.touch.js"></script>
    <script>
        var id = '3000000221';
        var siteUrl = 'index.html';
        var saleId = '1033139';
    </script>
    <!--end::Global Theme Bundle-->
</body>
<!--end::Body-->


</html>
