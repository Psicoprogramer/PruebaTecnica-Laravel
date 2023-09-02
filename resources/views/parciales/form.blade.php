
<div class="container-form">
  <form class="w-full max-w-lg" method="post" action="{{ route('product.store') }}">
      @csrf <!-- Esto es para Laravel, agrega un campo oculto con el token CSRF -->
      @method('post')
      <div class="flex flex-wrap -mx-3 mb-6">
          <div class="container-inputs">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                  name
              </label>
              <input
                  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                  id="grid-first-name" type="text" id="name" name="name" autocomplete required/>
              <p class="text-red-500 text-xs italic">Please fill out this field.</p>
          </div>
          <div class="container-inputs">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                  Descripción
              </label>
              <input
                  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  id="description" type="text" placeholder="Doe" name="description"/>
          </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
          <div class="container-inputs">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                  disponible
              </label>
              <div class="relative">
                  <select
                      class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                      id="avalible"
                      name="avalible"
                  >
                      <option value="1">si</option>
                      <option value="0">no</option>
                  </select>
              </div>
          </div>
          <div class="container-inputs">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                  Cantidad
              </label>
              <input
                  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  type="number" id="cantidad" name="cantidad" min="0" required placeholder="90">
          </div>
          <div class="container-inputs">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                  Valor
              </label>
              <input
                  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  type="number" id="value" name="value" step="0.01" min="0" required
                  placeholder="90.210">
          </div>
      </div>
      <div class="container-boton_form">
          <button class="button-default" type="submit">Guardar</button>
      </div> 
  </form>
</dir>
