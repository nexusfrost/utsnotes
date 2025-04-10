public function store(Request $request)
{
    // Validate incoming request data
    $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'people' => 'nullable|string', // Optional field
    ]);

    // Create a new post entry
    Post::create($request->all());

    // Redirect with a success message
    return redirect()->route('posts.index')->with('success', 'Post created successfully!');
}
