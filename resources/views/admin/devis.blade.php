@extends('admin.app', ['page' => 'Liste de devis', 'pageSlug' => 'devis', 'sup' => 'devis'])
@section('content')

    <h1>Gestion de devis</h1>

    <div class=" mb-3">

        <table class="table table-bordered table-striped hover table-sm align-middle newdevis ">
            <thead class="table-dark text-white text-center  align-middle">
                <th>N° devis</th>
                <th>Nom </th>
                <th>Société</th>
                <th>Service</th>
                <th>Date</th>
                <th>Action</th>
            </thead>
            <tbody class=" text-center">
                @if ($deviss->isNotEmpty())
                    @php
                        $cnt = 1;
                        $delmodal = 'del' . $cnt;
                    @endphp

                    @foreach ($deviss as $key => $devis)
                        <tr>
                            <td>{{ $devis->id }}</td>
                            <td>{{ $devis->nom }}</td>
                            <td>{{ $devis->societe }}</td>
                            <td>{{ $devis->type_service }}</td>
                            <td>{{ $devis->created_at->format('d/m/Y') }}</td>
                            <td class="td-actions ">
                                <div class="dropdown dropstart">
                                    <button type="button" class="btn btn-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false" id="dropdownMenu2">
                                        <span class="badge rounded-pill bg-primary"><i class="fas fa-ellipsis-h"></i></span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">

                                        <a href="{{ url('devis/show', $devis) }}" class="btn btn-link dropdown-item"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Voir le devis ">
                                            <i class="fas fa-eye"></i> Voir le devis
                                        </a>
                                        <a href="{{ url('devis/edit', $devis) }}" class="btn btn-link  dropdown-item"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Modifier le devis ">
                                            <i class="fas fa-edit"></i> Modifier le devis
                                        </a>

                                        <button type="button" class="btn btn-link dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#{{ $delmodal }}">
                                            <i class="fas fa-trash-alt" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Supprimer le devis "></i>
                                            Supprimer la devis
                                        </button>

                                    </div>
                                </div>
                            </td>
                        </tr>

                        <div class="modal fade" id="{{ $delmodal }}" tabindex="-1" aria-labelledby="deleteDevisModal"
                            aria-hidden="true">
                            <div class="modal-dialog   modal-dialog-centered  " role="document">
                                <div class="modal-content">
                                    <div class="modal-header d-flex justify-content-center">
                                        <h4>Confirmer Suppression </h4>
                                    </div>
                                    <div class="modal-body ">
                                        <h5 class="text-center"><i class="fas fa-exclamation-circle fa-3x warning"></i>
                                        </h5>
                                        <h5 class="text-center">Etes-vous sûre de supprimer le devis</h5>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center">
                                        <form action="{{ url('devis/delete', $devis) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-primary fw-bold" type="submit">Supprimer</button>
                                            <button type="reset" class="btn btn-outline-danger  fw-bold"
                                                data-bs-dismiss="modal">Annuler</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @php
                            $cnt = $cnt + 1;
                            $delmodal = 'del' . $cnt;
                        @endphp
                    @endforeach
                @else
                    <tr>
                        <td colspan="10">Aucun devis trouvé.</td>
                    </tr>
                @endif
            </tbody>
        </table>

    </div>
@endsection
