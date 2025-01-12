<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        UE <span>Alemania</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
          <a href="{{route('dashboard')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Escritorio</span>
          </a>
        </li>
        <li class="nav-item nav-category">Administración</li>
        <li class="nav-item">
          <a href="{{route('admin.docente.index')}}" class="nav-link">
            <i class="link-icon" data-feather="users"></i>
            <span class="link-title">Docente</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#auth" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="slack"></i>
            <span class="link-title">Autenticación</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('admin.users.index')}}" class="nav-link">Usuarios</a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.roles.index')}}" class="nav-link">Roles</a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.permissions.index')}}" class="nav-link">Permisos</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#documentos" role="button" aria-expanded="false" aria-controls="advancedUI">
            <i class="link-icon" data-feather="file"></i>
            <span class="link-title">Documentos</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="documentos">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('admin.documentofiles.index')}}" class="nav-link">Doc Files</a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.docdocentes.index')}}" class="nav-link">Doc Docentes</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#permisos" role="button" aria-expanded="false" aria-controls="advancedUI">
            <i class="link-icon" data-feather="file"></i>
            <span class="link-title">Faltas-Permisos</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="permisos">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="#" class="nav-link">Faltas</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Permisos</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item nav-category">Dirección</li>
        <li class="nav-item">
          <a href="{{route('documento.docdirue.index')}}" class="nav-link">
            <i class="link-icon" data-feather="file-text"></i>
            <span class="link-title">Datos Documentos </span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('documento.docfileues.index')}}" class="nav-link">
            <i class="link-icon" data-feather="folder-plus"></i>
            <span class="link-title">Datos Documentos File </span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="database"></i>
            <span class="link-title">Datos Admin </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false" aria-controls="general-pages">
            <i class="link-icon" data-feather="book"></i>
            <span class="link-title">Registros admin</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="general-pages">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/general/blank-page.html" class="nav-link">Permisos</a>
              </li>
              <li class="nav-item">
                <a href="pages/general/faq.html" class="nav-link">Faltas</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item nav-category">DOCENTES</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#Components" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="folder-minus"></i>
            <span class="link-title">File Docente</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="Components">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href=" {{route('admin.personaldocs.index')}}" class="nav-link"> Doc Personales</a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.diplomados.index')}}" class="nav-link">Diplomados</a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.cursos.index')}}" class="nav-link">Cursos</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a href="{{route('admin.docdireccions.index')}}" class="nav-link">
            <i class="link-icon" data-feather="clipboard"></i>
            <span class="link-title">Documentos</span>
          </a>
        </li>
        <li class="nav-item nav-category">ORGANIZACION UE</li>
        <li class="nav-item">
          <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
            <i class="link-icon" data-feather="hash"></i>
            <span class="link-title">Documentation</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>