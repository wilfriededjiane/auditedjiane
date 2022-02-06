

<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="static/css/main.css">
<link rel="stylesheet" type="text/css" href="static/css/vuetify.min.css">
<script src="static/js/vue.js"></script>
<script src="static/js/vuetify.js"></script>

<!--navbar-->

<nav class="navbar navbar-dark navbar-expand-lg fixed-top p-0 m-0" id="nav-bar">
    <v-toolbar dark data-app>
        <!--<v-app-bar-nav-icon>
          <p>bonj-</p>
        </v-app-bar-nav-icon> -->

        <v-spacer></v-spacer>
        <v-toolbar-items>
            <v-btn text class="nav-link" href="http://localhost/Audit/emploi/main/Emploi/emploi.php">Mode d'emploi</v-btn>
            <v-menu open-on-hover offset-y rounded="0">
              <template v-slot:activator="{ on, attrs}">
                <v-btn text dark v-bind="attrs" v-on="on">
                   OUTIL D'AUTODIAGNOSTIC 1
                </v-btn>
              </template>
              <v-list dark>
                <v-list-item class="nav-link" href="http://localhost/Audit/exigences/main/Exigences/Exigences/Exigences.php">Exigences</v-list-item>
                <v-list-item class="nav-link" href="http://localhost/Audit/mesures_annexe_a/main/M/M/index.php">Mesures de l'Annexe A</v-list-item>
                <v-list-item class="nav-link" href="http://localhost/Audit/resultat_globeaux/main/Resultats_Globaux/Resultats_Globaux.php">Résultats Globaux</v-list-item>
                <v-list-item class="nav-link" href="http://localhost/Audit/resultats_par_article/main/Resultats_par_Article/Resultats_par_Article.php">Résultats par Article</v-list-item>
                <v-list-item class="nav-link" href="http://localhost/Audit/resultats_annexe_a/main/Resultats_Annexe_A/Resultats_Annexe_A.php">Résultats de l'Annexe A</v-list-item>
                <v-list-item class="nav-link" href="http://localhost/Audit/conseils/main/Conseils/Conseils.php">Conseils</v-list-item>

              </v-list>
            </v-menu>

            <v-menu open-on-hover offset-y rounded="0">
              <template v-slot:activator="{ on, attrs}">
                <v-btn text dark v-bind="attrs" v-on="on">
                   OUTIL D'AUTODIAGNOSTIC 2
                </v-btn>
              </template>
              <v-list dark>
                <v-list-item class="nav-link" href="http://localhost/Audit/diagnostic2/main/Diagnostic2/Diagnostic2/Diagnostic2.php/">Diagnostic 2</v-list-item>
                <v-list-item class="nav-link" href="http://localhost/Audit/resultat_diagnostic2/main/Resultats_Diagnostic2/Resultats_Diagnostic2.php">Resultats Diagnostic2</v-list-item>
              </v-list>
            </v-menu>

            <v-menu open-on-hover offset-y rounded="0">
              <template v-slot:activator="{ on, attrs}">
                <v-btn text dark v-bind="attrs" v-on="on">
                   OUTIL D'AUTODIAGNOSTIC 3: MATURITE
                </v-btn>
              </template>
              <v-list dark>
                <v-list-item class="nav-link" href="http://localhost/Audit/maturite/main/Maturite/Maturite/Maturite.php">Maturite</v-list-item>
                <v-list-item class="nav-link" href="http://localhost/Audit/resultat_maturite/main/Resultats_audit_de_Maturite/Resultats_audit_de_Maturite.php">Resultats_audit_de_Maturite</v-list-item>
              </v-list>
            </v-menu>


            <v-btn text class="nav-link"  href="http://localhost/Audit/cartographie/main/cartographie/carto_01.php">
                Cartographie

            </v-btn>

            <v-btn text class="nav-link" href="http://outil-autodiagnostic.herokuapp.com/compte/quitter">Quitter</v-btn>
        </v-toolbar-items>
    </v-toolbar>
  </nav>
<!--navbar-->