
    <!-- Modal -->
   
            <div class="flex justify-end p-2">
                <button onclick="closeModal('modelConfirm')" type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                    Fermer
                </button>
            </div>
            <div class="p-4  w-full">
                @foreach ($notifications as $notification)
                    <div class="flex flex-col gap-3  w-full">
                        @if (isset($notification->data['etat']) && $notification->data['etat'] === 'accepter')
                            <div class="flex bg-white dark:bg-gray-900 items-center px-6 py-4 text-sm border-t-2  w-full rounded-b shadow-sm border-green-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-green-500 stroke-current" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <div class="ml-3">
                                    <div class="font-bold text-left text-black dark:text-gray-50">
                                        {{ $notification->data['message'] }}
                                    </div>
                                    <div class="w-full text-gray-900 dark:text-gray-300 mt-1">
                                        {{ $notification->created_at->diffForHumans() }}.
                                    </div>
                                    <form action="{{ route('notifications.markAsRead', $notification->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="text-blue-500">Marquer comme lue</button>
                                    </form>
                                </div>
                            </div>
                        @elseif(isset($notification->data['etat']) && $notification->data['etat'] === 'refuser')
                            <div class="flex bg-white dark:bg-gray-900 items-center px-6 py-4 text-sm border-t-2 rounded-b shadow-sm border-red-500">
                                <svg viewBox="0 0 24 24" class="w-8 h-8 text-red-500 stroke-current" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 8V12V8ZM12 16H12.01H12ZM21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <div class="ml-3">
                                    <div class="font-bold text-left text-black dark:text-gray-50">
                                        {{ $notification->data['message'] }}
                                    </div>
                                    <div class="w-full text-gray-900 dark:text-gray-300 mt-1">
                                        {{ $notification->created_at->diffForHumans() }}.
                                    </div>
                                    <form action="{{ route('notifications.markAsRead', $notification->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="text-blue-500">Marquer comme lue</button>
                                    </form>
                                </div>
                            </div>
                        @else
                            <div class="flex bg-white dark:bg-gray-900 items-center px-6 py-4 text-sm border-t-2 rounded-b shadow-sm border-yellow-300">
                                <svg viewBox="0 0 24 24" class="w-8 h-8 text-yellow-500 stroke-current">
                                    <path fill="currentColor"
                                          d="M23.119,20,13.772,2.15h0a2,2,0,0,0-3.543,0L.881,20a2,2,0,0,0,1.772,2.928H21.347A2,2,0,0,0,23.119,20ZM11,8.423a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Zm1.05,11.51h-.028a1.528,1.528,0,0,1-1.522-1.47,1.476,1.476,0,0,1,1.448-1.53h.028A1.527,1.527,0,0,1,13.5,18.4,1.475,1.475,0,0,1,12.05,19.933Z">
                                    </path>
                                </svg>
                                <div class="ml-3">
                                    <div class="font-bold text-left text-black dark:text-gray-50">
                                        {{ $notification->data['message'] }}
                                    </div>
                                    <div class="w-full text-gray-900 dark:text-gray-300 mt-1">
                                        {{ $notification->created_at->diffForHumans() }}.
                                    </div>
                                    <form action="{{ route('notifications.markAsRead', $notification->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="text-blue-500">Marquer comme lue</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
    </div>

    <script>
        function openModal(modalId) {
            var modal = document.getElementById(modalId);
            modal.classList.remove('hidden');
        }

        function closeModal(modalId) {
            var modal = document.getElementById(modalId);
            modal.classList.add('hidden');
        }
    </script>
