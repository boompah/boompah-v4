##
# Float objects represent inexact real numbers using the native architecture's
# double-precision floating point representation
#
# Floating point has a different arithmetic and is a inexact number So you should know its esoteric system.

# Useful link: https://github.com/rdp/ruby_tutorials_core/wiki/ruby-talk-faq#floats_imprecise

puts "Example of odd behavior"
puts (2.0 - 1.1) == 0.9

puts "Your options when you run into this:"

# compare values by delta, example (from test/unit framework):

# did not work
# assert_in_delta ((1.1-0.9), 0.2, 0.0001) # passes

puts "use BigDecimal"

require 'bigdecimal'
(BigDecimal.new("1.1") - BigDecimal.new("0.9")) == 0.2