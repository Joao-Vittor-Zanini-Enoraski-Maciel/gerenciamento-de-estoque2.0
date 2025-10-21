<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Caixa do Sistema</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="assets/img/logo.svg" alt="Logo" width="100" height="90" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/index.php"
                >Catálogo</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/create.php">Cadastro de Produtos</a>
            </li>
            <div class="dropdown">
              <button
                class="btn dropdown-toggle"
                type="button"
                data-bs-toggle="dropdown"
              >
                Editar
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/categorias.php">Categorias</a></li>
                <li><a class="dropdown-item" href="/materiais.php">Materiais</a></li>
                <li><a class="dropdown-item" href="/cores.php">Cores</a></li>
              </ul>
            </div>
            <li class="nav-item">
              <a class="nav-link" href="/caixa.php">Caixa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sair</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="#"
                data-bs-toggle="modal"
                data-bs-target="#supportModal"
                ><i class="bi bi-info-circle"></i> Suporte</a
              >
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Pesquisar produto..."
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Buscar
            </button>
          </form>
        </div>
      </div>
    </nav>

    <main class="container py-4">
      <h1 class="mb-4">Caixa do Sistema</h1>

      <div class="row g-4 mb-5">
        <div class="col-md-7 col-lg-8">
          <div class="card text-bg-success h-100">
            <div class="card-body text-center">
              <h5 class="card-title">VALOR TOTAL DAS VENDAS</h5>
              <p class="card-text display-4 fw-bold">R$ 779,50</p>
              <h5 class="card-title">VALOR TOTAL DAS VENDAS</h5>
              <p class="card-text display-4 fw-bold">R$ 779,50</p>
              <h5 class="card-title">VALOR TOTAL DAS VENDAS</h5>
              <p class="card-text display-4 fw-bold">R$ 779,50</p>
              <h5 class="card-title">VALOR TOTAL DAS VENDAS</h5>
              <p class="card-text display-4 fw-bold">R$ 779,50</p>
            </div>
            
          </div>
        </div>

        <div class="col-md-5 col-lg-4">
          <div class="card h-100">
            <div class="card-header fw-bold">Registrar Saída de Caixa</div>
            <div class="card-body">
              <form>
                <div class="mb-3">
                  <label for="saidaValor" class="form-label">Valor</label>
                  <div class="input-group">
                    <span class="input-group-text">R$</span>
                    <input
                      type="text"
                      class="form-control"
                      id="saidaValor"
                      placeholder="0,00"
                    />
                  </div>
                </div>
                <div class="mb-3">
                  <label for="saidaMotivo" class="form-label">Motivo</label>
                  <input
                    type="text"
                    class="form-control"
                    id="saidaMotivo"
                    placeholder="Ex: Pagamento de fornecedor"
                  />
                </div>
                <div class="d-grid">
                  <button type="submit" class="btn btn-warning">
                    <i class="bi bi-box-arrow-up"></i> Registrar Saída
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <h2 class="mb-3">Histórico de Vendas</h2>
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Produto</th>
                  <th scope="col">Qtd.</th>
                  <th scope="col">Valor Custo</th>
                  <th scope="col">Valor Venda</th>
                  <th scope="col">Lucro Peça</th>
                  <th scope="col">Data/Hora da Venda</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Conjunto Azul Casual</td>
                  <td>1</td>
                  <td>R$ 40,00</td>
                  <td>R$ 189,90</td>
                  <td>R$ 149,90</td>
                  <td>15/09/2025 09:02:15</td>
                  <td>
                    <button class="btn btn-danger btn-sm">
                      <i class="bi bi-x-circle"></i> Estornar
                    </button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Camisa Verde Social</td>
                  <td>2</td>
                  <td>R$ 40,00</td>
                  <td>R$ 189,90</td>
                  <td>R$ 149,90</td>
                  <td>15/09/2025 08:55:43</td>
                  <td>
                    <button class="btn btn-danger btn-sm">
                      <i class="bi bi-x-circle"></i> Estornar
                    </button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Calça Jeans Preta</td>
                  <td>1</td>
                  <td>R$ 40,00</td>
                  <td>R$ 189,90</td>
                  <td>R$ 149,90</td>
                  <td>15/09/2025 08:48:11</td>
                  <td>
                    <button class="btn btn-danger btn-sm">
                      <i class="bi bi-x-circle"></i> Estornar
                    </button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Bolsa de Couro Marrom</td>
                  <td>1</td>
                  <td>R$ 40,00</td>
                  <td>R$ 189,90</td>
                  <td>R$ 149,90</td>
                  <td>15/09/2025 08:32:50</td>
                  <td>
                    <button class="btn btn-danger btn-sm">
                      <i class="bi bi-x-circle"></i> Estornar
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
