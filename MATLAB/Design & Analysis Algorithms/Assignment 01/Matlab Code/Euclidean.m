function [ ans ] = Euclidean( a, b )
    count=0; % initialize counter
    a=abs(a);
    b=abs(b);
    if(a<b)  % switch a and b, if necessary, so that b<a
        c=a; % hang onto the value of a
        a=b; % even while replacing a with b
        b=c; % now replace b with a
        count=count+1;
    end
    while(b>0)
        q=floor(a/b);
        r=a-q*b;
        a=b;
        b=r;
        count=count+1;
    end
    ans = [ count ];
end

