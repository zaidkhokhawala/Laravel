@extends('website.layout.main')

@section('main_content')




		{{-- Block 01: Main slide --}}
		@include('website.index_block.Block_1_main_slide')

		{{-- Block 02: Banner --}}
		@include('website.index_block.Block_2_Banner')

		{{-- Block 03: Product Tab --}}
		@include('website.index_block.Block_3_Product_1')

		{{-- Block 04: Banner Promotion 01 --}}
		@include('website.index_block.Block_4_Banner_Promotion_1')

		{{-- Block 05: Banner Promotion 02 --}}
		@include('website.index_block.Block_5_Banner_Promotion_2')

		{{-- Block 06: Products --}}
		@include('website.index_block.Block_6_Products_2')

		{{-- Block 07: Brands --}}
		@include('website.index_block.Block_7_Brands')

		{{-- Block 08: Blog Posts --}}
		@include('website.index_block.Block_8_BlogPosts')

	
@endsection