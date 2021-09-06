import math 

def crusoe(n, d, ang, dist_mult, ang_mult):
    x, y = 0, 0
    for step in range(0, n):=
        x += d * math.cos(math.radians(ang))
        y += d * math.sin(math.radians(ang))
        d *= dist_mult
        ang *= ang_mult
    return [x, y]

"""
    Robinson Crusoe decides to explore his isle. On a sheet of paper he plans the following process.

    His hut has coordinates origin = [0, 0]. From that origin he walks a given distance d on a line that has a given angle ang with the x-axis. He gets to a point A. (Angles are measured with respect to the x-axis)

    From that point A he walks the distance d multiplied by a constant distmult on a line that has the angle ang multiplied by a constant angmult and so on and on.

    We have d0 = d, ang0 = ang; then d1 = d * distmult, ang1 = ang * angmult etc ...

    Let us suppose he follows this process n times. What are the coordinates lastx, lasty of the last point?

    The function crusoe has parameters;

    n : numbers of steps in the process
    d : initial chosen distance
    ang : initial chosen angle in degrees
    distmult : constant multiplier of the previous distance
    angmult : constant multiplier of the previous angle
"""