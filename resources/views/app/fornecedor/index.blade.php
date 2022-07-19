<h1> Fornecedor </h1>
 

@isset($fornecedores) 
    @forelse ( $fornecedores as $indice => $fornecedor )
         Nome: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }} 
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
        <hr>
    @empty
        Não existem fornecedores cadastrados!!!
    @endforelse
@endisset