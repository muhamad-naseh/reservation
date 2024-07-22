
<div class="row">
    <div class="col-12">
        <x-button-create title="ADD NEW MENU" :url="route('admin.menu.create')" />
        <x-card title="LIST MENU">
            <table class="table">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>CATEGORY</th>
                    <th>NAME</th>
                    <th>PRICE</th>
                    <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($menus as $i => $menu)
                    <tr>
                        <td>{{ $menus->firstItem() + $i }}</td>
                        <td>{{ $menu->category->name }}</td>
                        <td>{{ $menu->name }}</td>
                        <td>
                            <sup>Rp</sup> {{ moneyFormat($menu->price) }}
                        </td>
                        <td>
                            <a href="{{ route('admin.menu.show', $menu->id) }}"
                               class="btn btn-primary btn-sm">
                                Detail
                            </a>
                            <x-button-edit :url="route('admin.menu.edit', $menu->id)" />
                            <x-button-delete :id="$menu->id" :url="route('admin.menu.destroy', $menu->id)" />
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </x-card>
        <div class="d-flex justify-content-end">{{ $menus->links() }}</div>
    </div>
</div>
