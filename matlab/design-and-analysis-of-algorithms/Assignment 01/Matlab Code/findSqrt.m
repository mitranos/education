function [ sqr ] = findSqrt( x )
    sqr = 0;
    for n = 1:x
        if(n^2 <= x)
            sqr = sqr + 1;
        else
            break;
        end
    end
end

